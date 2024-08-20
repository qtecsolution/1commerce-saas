<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\Template\TemplateFeature;
use App\Models\Template\TemplateStep;
use App\Models\Template\TemplateTestimonial;
use App\Models\Template\UlaunchTemplate;
use App\Models\Template\UserTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            // if (!$template) {
            //     $template = UlaunchTemplate::create([
            //         'user_id' => $this->userId,
            //     ]);
            // }

            $this->template = $template;
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function updateCompanyLogo(Request $request)
    {
        $template = UserTemplate::where('user_id', $this->userId)->where('template_id', $this->templateId)->first();

        if ($template) {
            if ($request->hasFile('image')) {
                if ($template->company_logo) {
                    $oldImagePath = storage_path('app/public/' . $template->company_logo);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $request->file('image')->store('public/users/logo');
                $template->company_logo = 'users/logo/' . $request->file('image')->hashName();
                $template->save();
            }
        }

        return response()->json([
            'message' => 'Company Logo Updated.',
        ]);
    }

    public function updateNavColor(Request $request)
    {
        $this->template->nav_color = $request->input('nav_color');
        $this->template->save();

        return response()->json([
            'message' => 'Nav Color Updated.',
            'data' => $this->template->nav_color
        ]);
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
            'button' => json_decode($request->input('button')),
            'background_color' => $request->input('background_color'),
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
            'background_color' => $request->input('background_color'),
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
            'background_color' => $request->input('background_color'),
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
            'sub_title' => $request->input('sub_title'),
            'background_color' => $request->input('background_color'),
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
            'background_color' => $request->input('background_color'),
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
            'sub_title' => $request->input('sub_title'),
            'background_color' => $request->input('background_color'),
            'button' => json_decode($request->input('button')),
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
            'text' => $request->input('text'),
            'background_color' => $request->input('background_color'),
        ]);

        $this->template->status = 1;
        $this->template->save();

        return response()->json([
            'message' => 'Footer Area Updated.',
            'data' => $this->template->footer_area
        ]);
    }

    public function updateProductInfo(Request $request)
    {
        $template = UserTemplate::where('user_id', $this->userId)->where('template_id', $this->templateId)->first();
        if ($template) {
            $template->update([
                'product_name' => $request->input('product_name'),
                'product_price' => $request->input('product_price'),
                'product_currency' => $request->input('product_currency'),
            ]);
        }

        return response()->json([
            'message' => 'Product Info Updated.',
            'data' => $template
        ]);
    }

    public function initialSetup($user_id)
    {
        UlaunchTemplate::create([
            'user_id' => $user_id,
            'status' => 1,
            'nav_color' => '#20bea7',
            'menu_area' => json_encode([
                ["title" => "Home", "url" => "#home"],
                ["title" => "Features", "url" => "#features"],
                ["title" => "About", "url" => "#about"],
                ["title" => "Testimonials", "url" => "#testimonials"],
                ["title" => "Order", "url" => "#order"]
            ]),
            'hero_area' => json_encode([
                "title" => "Best quality smart watch only at Tk 2000.",
                "description" => "Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum necessitatibus praesentium voluptatum deleniti atque corrupti, quos dolores eos.",
                "image" => null,
                "button" => [
                    "title" => "Product Details",
                    "url" => "#features",
                    "color" => "transparent",
                    "text_color" => "white",
                    'user_id' => $user_id,
                    "border_color" => "white",
                    "hover_color" => "white",
                    "hover_text_color" => "black",
                    "hover_border_color" => "white"
                ],
                "background_color" => "#20bea7"
            ]),
            'features_area' => json_encode([
                "title" => "Product Features",
                "sub_title" => "Explore the awesome",
                "image" => null,
                "background_color" => "#f7f7f7"
            ]),
            'about_area' => json_encode([
                "title" => "About Product",
                "sub_title" => "BEAUTY MEETS FUNCTIONALITY",
                "background_color" => "#ffffff",
                "items" => [
                    [
                        "title" => "Different preset Signup & Order forms ready to use.",
                        "sub_title" => "FRESH NEWS FROM THE LABS",
                        "description" => "Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has.",
                        "button" => [
                            "title" => "Purchase Now",
                            "url" => "#order",
                            "color" => "transparent",
                            "text_color" => "#20bea7",
                            "border_color" => "#20bea7",
                            "hover_color" => "#20bea7",
                            "hover_text_color" => "white",
                            "hover_border_color" => "#20bea7"
                        ],
                        "image" => null,
                        "image_raw" => null
                    ],
                    [
                        "title" => "Different preset Signup & Order forms ready to use.",
                        "sub_title" => "FRESH NEWS FROM THE LABS",
                        "description" => "Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has.",
                        "button" => [
                            "title" => "Purchase Now",
                            "url" => "#order",
                            "color" => "transparent",
                            "text_color" => "#20bea7",
                            "border_color" => "#20bea7",
                            "hover_color" => "#20bea7",
                            "hover_text_color" => "white",
                            "hover_border_color" => "#20bea7"
                        ],
                        "image" => null,
                        "image_raw" => null
                    ]
                ]
            ]),
            'testimonials_area' => json_encode([
                "title" => "What our clients say",
                "sub_title" => "FEEDBACK",
                "background_color" => "#20bea7"
            ]),
            'info_area' => json_encode([
                "title" => "Get your Product today!",
                "sub_title" => "GET IT TODAY",
                "description" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.",
                "button" => [
                    "title" => "Purchase Now",
                    "url" => "#order",
                    "color" => "transparent",
                    "text_color" => "#20bea7",
                    "border_color" => "#20bea7",
                    "hover_color" => "#20bea7",
                    "hover_text_color" => "white",
                    "hover_border_color" => "#20bea7"
                ],
                "video_url" => null,
                "background_color" => "#f7f7f7"
            ]),
            'order_area' => json_encode([
                "title" => "Order Now",
                "sub_title" => "GET YOUR PRODUCT",
                "background_color" => "#ffffff",
                "button" => [
                    "title" => "Order Now",
                    "url" => null,
                    "color" => "transparent",
                    "text_color" => "#20bea7",
                    "border_color" => "#20bea7",
                    "hover_color" => "#20bea7",
                    "hover_text_color" => "white",
                    "hover_border_color" => "#20bea7"
                ],
            ]),
            'footer_area' => json_encode([
                "text" => "Copyright © 2024, All Rights Reserved.",
                "background_color" => "#263238"
            ])
        ]);

        // Define the variations for title and position
        $variations = [
            ['title' => 'Dual Processor', 'position' => 1],
            ['title' => 'Gold aluminum', 'position' => 2],
            ['title' => 'Ion-X glass', 'position' => 3],
            ['title' => 'Heart rate sensor', 'position' => 4],
            ['title' => 'Force Touch', 'position' => 5],
            ['title' => 'Retina display', 'position' => 6],
            ['title' => 'Fire Speaker', 'position' => 7],
            ['title' => 'Bluetooth & Wi-Fi', 'position' => 8],
        ];

        foreach ($variations as $variation) {
            TemplateFeature::create([
                'user_id' => $user_id,
                'template_id' => 1,
                'icon' => 'flaticon-cpu',
                'title' => $variation['title'],
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et',
                'position' => $variation['position'],
                'is_active' => 1,
            ]);
        }

        // Define the steps for title and position
        $steps = [
            ['title' => 'Step 1', 'position' => 1, 'icon' => 'flaticon-login'],
            ['title' => 'Step 2', 'position' => 2, 'icon' => 'flaticon-login-1'],
            ['title' => 'Step 3', 'position' => 3, 'icon' => 'flaticon-shopping-cart'],
        ];

        foreach ($steps as $step) {
            TemplateStep::create([
                'user_id' => $user_id,
                'template_id' => 1,
                'icon' => $step['icon'],
                'title' => $step['title'],
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et',
                'position' => $step['position'],
                'is_active' => 1,
            ]);
        }

        // Define the testimonials for title and position
        $testimonials = [
            ['reviewer_name' => 'Muhaimin Shihab'],
            ['reviewer_name' => 'Asaduzzaman'],
            ['reviewer_name' => 'NM Babor'],
        ];

        foreach ($testimonials as $testimonial) {
            TemplateTestimonial::create([
                'user_id' => $user_id,
                'template_id' => 1,
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et',
                'reviewer_name' => $testimonial['reviewer_name'],
                'reviewer_bio' => 'Customer',
                'position' => 0,
                'is_active' => 1,
            ]);
        }

        return true;
    }
}
