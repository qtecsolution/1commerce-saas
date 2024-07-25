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
    private $template = [];

    public function __construct()
    {
        $this->template = UlaunchTemplate::where('user_id', Auth::id())->first();
    }

    public function updateHeroArea(Request $request)
    {
        $template = $this->template;
        $uploadedPath = null;

        if ($template) {
            $decodedData = json_decode($template->hero_area);

            if ($decodedData && isset($decodedData->image)) {
                $oldImagePath = storage_path('app/public/' . $decodedData->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            if ($request->hasFile('image')) {
                $uploadedPath = $request->file('image')->store('public/ulaunch');
                $uploadedPath = 'ulaunch/' . basename($uploadedPath);
            }

            $template->hero_area = json_encode([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'image' => $uploadedPath,
                'button' => json_encode($request->input('button')),
            ]);

            $template->save();
        } else {
            if ($request->hasFile('image')) {
                $uploadedPath = $request->file('image')->store('public/ulaunch');
                $uploadedPath = 'ulaunch/' . basename($uploadedPath);
            }

            $template = new UlaunchTemplate();
            $template->user_id = Auth::user()->id;
            $template->hero_area = json_encode([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'image' => $uploadedPath,
                'button' => json_encode($request->input('button')),
            ]);

            $template->save();
        }

        return response()->json([
            'message' => 'Hero Area Updated.',
            'data' => json_decode($template->hero_area),
        ]);
    }

    public function updateStepsArea(Request $request)
    {
        return response()->json([
            'message' => 'Steps Area Updated.'
        ]);
    }

    public function updateFeaturesArea(Request $request)
    {
        return response()->json([
            'message' => 'Features Area Updated.'
        ]);
    }

    public function updateAboutArea(Request $request)
    {
        return response()->json([
            'message' => 'About Area Updated.'
        ]);
    }

    public function updateInfoArea(Request $request)
    {
        return response()->json([
            'message' => 'Info Area Updated.'
        ]);
    }

    public function updateOrderArea(Request $request)
    {
        return response()->json([
            'message' => 'Order Area Updated.'
        ]);
    }

    public function updateFooterArea(Request $request)
    {
        return response()->json([
            'message' => 'Footer Area Updated.'
        ]);
    }
}
