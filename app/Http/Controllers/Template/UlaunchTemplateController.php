<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\Template\TemplateFeature;
use App\Models\Template\TemplateStep;
use App\Models\Template\UlaunchTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UlaunchTemplateController extends Controller
{
    private $template;
    private $userId;
    private $templateId = 1;

    public function __construct()
    {
        $this->middleware(function (Request $request, $next) {
            if (!Auth::check()) {
                return to_route('sign_in');
            }

            $this->userId = Auth::id();
            $this->initializeTemplate();

            return $next($request);
        });
    }

    private function initializeTemplate()
    {
        if ($this->userId) {
            $template = UlaunchTemplate::where('user_id', $this->userId)->first();
            if (!$template) {
                $template = UlaunchTemplate::create([
                    'user_id' => $this->userId,
                ]);
            }

            $this->template = $template;
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function updateMenuArea(Request $request)
    {
        $this->template->menu_area = $request->input('items');
        $this->template->save();

        return response()->json([
            'message' => 'Menu Area Updated.',
            'data' => $this->template->menu_area
        ]);
    }

    public function updateHeroArea(Request $request)
    {
        $heroArea = $this->template->hero_area;
        $uploadedPath = null;

        if ($heroArea) {
            if ($request->hasFile('image')) {
                $decodedData = json_decode($heroArea);

                if ($decodedData && isset($decodedData->image)) {
                    $oldImagePath = storage_path('app/public/' . $decodedData->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $uploadedPath = $request->file('image')->store('public/ulaunch');
                $uploadedPath = 'ulaunch/' . basename($uploadedPath);
            }
        } else {
            if ($request->hasFile('image')) {
                $uploadedPath = $request->file('image')->store('public/ulaunch');
                $uploadedPath = 'ulaunch/' . basename($uploadedPath);
            }
        }

        $this->template->hero_area = json_encode([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $uploadedPath,
            'button' => $request->input('button'),
        ]);

        $this->template->save();

        return response()->json([
            'message' => 'Hero Area Updated.',
            'data' => $this->template->hero_area,
        ]);
    }

    public function updateStepsArea(Request $request)
    {
        $steps = json_decode($request->input('items'));

        foreach ($steps as $key => $step) {
            if (isset($step->id)) {
                TemplateStep::where('id', $step->id)->update([
                    'icon' => $step->icon,
                    'title' => $step->title,
                    'description' => $step->description,
                    'position' => $key + 1
                ]);
            } else {
                TemplateStep::create([
                    'template_id' => $this->templateId,
                    'user_id' => $this->userId,
                    'icon' => $step->icon,
                    'title' => $step->title,
                    'description' => $step->description,
                    'position' => $key + 1
                ]);
            }
        }

        $steps = $this->template->steps;

        return response()->json([
            'message' => 'Steps Area Updated.',
            'data' => $steps
        ]);
    }

    public function updateFeaturesArea(Request $request)
    {
        $features = json_decode($request->input('items'));
        $uploadedPath = null;

        if ($this->template->features_area) {
            if ($request->hasFile('image')) {
                $decodedData = json_decode($this->template->features_area);

                if ($decodedData && isset($decodedData->image)) {
                    $oldImagePath = storage_path('app/public/' . $decodedData->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $uploadedPath = $request->file('image')->store('public/ulaunch');
                $uploadedPath = 'ulaunch/' . basename($uploadedPath);
            }
        } else {
            if ($request->hasFile('image')) {
                $uploadedPath = $request->file('image')->store('public/ulaunch');
                $uploadedPath = 'ulaunch/' . basename($uploadedPath);
            }
        }

        $this->template->features_area = json_encode([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
            'image' => $uploadedPath,
        ]);
        $this->template->save();

        foreach ($features as $key => $feature) {
            if (isset($feature->id)) {
                TemplateFeature::where('id', $feature->id)->update([
                    'icon' => $feature->icon,
                    'title' => $feature->title,
                    'description' => $feature->description,
                    'position' => $key + 1
                ]);
            } else {
                TemplateFeature::create([
                    'template_id' => $this->templateId,
                    'user_id' => $this->userId,
                    'icon' => $feature->icon,
                    'title' => $feature->title,
                    'description' => $feature->description,
                    'position' => $key + 1
                ]);
            }
        }

        $features = $this->template->features;

        return response()->json([
            'message' => 'Features Area Updated.',
            'data' => [$this->template->features_area, $features]
        ]);
    }

    public function updateAboutArea(Request $request)
    {
        $abouts = json_decode($request->input('items'));

        foreach ($abouts as $key => $about) {
            $uploadedPath = null;

            if ($this->template->about_area) {
                if ($request->hasFile('image_raw')) {
                    $decodedData = json_decode($this->template->about_area);
    
                    if ($decodedData && isset($decodedData->image)) {
                        $oldImagePath = storage_path('app/public/' . $decodedData->image);
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }
    
                    $uploadedPath = $request->file('image_raw')->store('public/ulaunch');
                    $uploadedPath = 'ulaunch/' . basename($uploadedPath);
                }
            } else {
                if ($request->hasFile('image_raw')) {
                    $uploadedPath = $request->file('image_raw')->store('public/ulaunch');
                    $uploadedPath = 'ulaunch/' . basename($uploadedPath);
                }
            }

            $about->image = $uploadedPath;
            $about->image_raw = null;
        }

        $this->template->about_area = json_encode([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
            'items' => json_encode($abouts),
        ]);
        $this->template->save();

        return response()->json([
            'message' => 'About Area Updated.',
            'data' => $this->template->about_area
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
