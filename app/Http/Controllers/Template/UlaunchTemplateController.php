<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\Template\UlaunchTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UlaunchTemplateController extends Controller
{
    public function updateHeroArea(Request $request)
    {
        $template = UlaunchTemplate::where('user_id', Auth::user()->id)->first();
        $uploadedPath = null;

        if ($template) {
            $decodedData = json_decode($template->hero_area);

            if ($decodedData && isset($decodedData->hero_image)) {
                $oldImagePath = storage_path('app/public/' . $decodedData->hero_image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            if ($request->hasFile('hero_image')) {
                $uploadedPath = $request->file('hero_image')->store('public/ulaunch');
                $uploadedPath = 'ulaunch/' . basename($uploadedPath);
            }

            $template->hero_area = json_encode([
                'hero_title' => $request->input('hero_title'),
                'hero_description' => $request->input('hero_description'),
                'hero_image' => $uploadedPath,
                'hero_button' => json_encode($request->input('hero_button')),
            ]);

            $template->save();
        } else {
            $uploadedPath = null;

            if ($request->hasFile('hero_image')) {
                $uploadedPath = $request->file('hero_image')->store('public/ulaunch');
                $uploadedPath = 'ulaunch/' . basename($uploadedPath);
            }

            $template = new UlaunchTemplate();
            $template->user_id = Auth::user()->id;
            $template->hero_area = json_encode([
                'hero_title' => $request->input('hero_title'),
                'hero_description' => $request->input('hero_description'),
                'hero_image' => $uploadedPath,
                'hero_button' => json_encode($request->input('hero_button')),
            ]);

            $template->save();
        }

        return response()->json([
            'message' => 'Hero Area Updated',
            'data' => json_decode($template->hero_area),
        ]);
    }
}
