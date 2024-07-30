<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\Template\TemplateFeature;
use App\Models\Template\TemplateStep;
use App\Models\Template\TemplateTestimonial;
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
        $validatedData = $request->validate([
            'items' => 'required|json',
        ]);

        $steps = json_decode($validatedData['items']);

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

        // Retrieve the updated steps
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
            'data' => $features
        ]);
    }

    public function updateAboutArea(Request $request)
    {
        $decodedData = json_decode($this->template->about_area);
        $abouts = json_decode($request->input('items'));

        $uploadedPaths = [null, null];
        $images = ['image_1', 'image_2'];

        foreach ($images as $index => $image) {
            if ($request->hasFile($image)) {
                if ($decodedData && isset($abouts[$index])) {
                    $oldImagePath = storage_path('app/public/' . $abouts[$index]->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $uploadedPath = $request->file($image)->store('public/ulaunch');
                $uploadedPaths[$index] = 'ulaunch/' . basename($uploadedPath);
            }
        }

        if (isset($abouts[0])) {
            $abouts[0]->image = $uploadedPaths[0] ?? $decodedData->items[0]->image ?? null;
            $abouts[0]->image_raw = null;
        }

        if (isset($abouts[1])) {
            $abouts[1]->image = $uploadedPaths[1] ?? $decodedData->items[1]->image ?? null;
            $abouts[1]->image_raw = null;
        }

        $this->template->about_area = json_encode([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
            'items' => $abouts,
        ]);
        $this->template->save();

        return response()->json([
            'message' => 'About Area Updated.',
            'data' => $this->template->about_area
        ]);
    }

    public function updateTestimonialsArea(Request $request)
    {
        $testimonials = json_decode($request->input('items'));

        // Update the testimonials area metadata
        $this->template->testimonials_area = json_encode([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title')
        ]);
        $this->template->save();

        $uploadedPaths = [];
        $images = ['image_1', 'image_2', 'image_3'];

        foreach ($images as $index => $image) {
            if ($request->hasFile($image)) {
                if ($this->template->testimonials->count() > 0 && isset($this->template->testimonials[$index]) && $this->template->testimonials[$index]->reviewer_image) {
                    $oldImagePath = storage_path('app/public/' . $this->template->testimonials[$index]->reviewer_image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $uploadedPath = $request->file($image)->store('public/ulaunch');
                $uploadedPaths[$index] = 'ulaunch/' . basename($uploadedPath);
            }
        }

        foreach ($testimonials as $index => $testimonial) {
            $testimonialImage = $uploadedPaths[$index] ?? $this->template->testimonials[$index]->reviewer_image ?? null;

            if (isset($testimonial->id)) {
                TemplateTestimonial::where('id', $testimonial->id)->update([
                    'review' => $testimonial->review,
                    'reviewer_name' => $testimonial->reviewer_name,
                    'reviewer_bio' => $testimonial->reviewer_bio,
                    'reviewer_image' => $testimonialImage
                ]);
            } else {
                TemplateTestimonial::create([
                    'template_id' => $this->templateId,
                    'user_id' => $this->userId,
                    'review' => $testimonial->review,
                    'reviewer_name' => $testimonial->reviewer_name,
                    'reviewer_bio' => $testimonial->reviewer_bio,
                    'reviewer_image' => $testimonialImage
                ]);
            }
        }

        // Ensure relationships are reloaded
        $this->template->load('testimonials');

        return response()->json([
            'message' => 'Testimonial Area Updated.',
            'data' => $this->template->testimonials
        ]);
    }

    public function updateInfoArea(Request $request)
    {
        $button = json_decode($request->input('button'));
        $data = json_encode([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
            'description' => $request->input('description'),
            'button' => $button,
            'video_url' => $request->input('video'),
        ]);

        $this->template->info_area = $data;
        $this->template->save();

        return response()->json([
            'message' => 'Info Area Updated.',
            'data' => $this->template->info_area
        ]);
    }

    public function updateOrderArea(Request $request)
    {
        $this->template->order_area = json_encode([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title')
        ]);
        $this->template->save();

        return response()->json([
            'message' => 'Order Area Updated.',
            'data' => $this->template->order_area
        ]);
    }

    public function updateFooterArea(Request $request)
    {
        $this->template->footer_area = json_encode([
            'text' => $request->input('text')
        ]);
        $this->template->save();

        return response()->json([
            'message' => 'Footer Area Updated.',
            'data' => $this->template->footer_area
        ]);
    }
}
