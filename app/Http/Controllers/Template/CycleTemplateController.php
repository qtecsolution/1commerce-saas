<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\Template\TemplateFeature;
use App\Models\Template\TemplateStep;
use App\Models\Template\TemplateTestimonial;
use App\Models\Template\CycleTemplate;
use App\Models\Template\UserTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CycleTemplateController extends Controller
{
    private $template;
    private $userId;
    private $templateId = 3;

    public function __construct()
    {
        $this->middleware(function (Request $request, $next) {
            if (!auth()->check()) {
                return to_route('sign_in');
            }

            $this->userId = auth()->id();
            $this->template = CycleTemplate::where('user_id', $this->userId)->first();
            return $next($request);
        });
    }

    public function initialSetup($user_id)
    {
        CycleTemplate::create([
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
                "features_title" => "Our Cycle",
                "feature_subtitle" => "It is a long established fact that a reader will be distracted by the",
                "feature_product_description"=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters",
                "image" => null,
                "background_color" => "#f7f7f7"
            ]),
            
            'about_area' => json_encode([
                "title" => "About Our cycle Store",
                "description" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters",
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
                "address" => "Lorem Addresss, Lorem City , Bangladesh",
                "phone" => "Call Now +263238",
                "email"=>"demo@gmail.com",
                "mapIframe"=>'<iframe
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                    width="600"
                    height="400"
                    frameborder="0"
                    style="border: 0; width: 100%"
                    allowfullscreen
                  ></iframe>',
                "footerBg"=>"#ffffff",
                "footerText1"=>"footerText1",
                "footerText2"=>"footerText2",
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

                $uploadedPath = $request->file('image')->store('public/cycle');
                $uploadedPath = 'cycle/' . basename($uploadedPath);
            }
        } else {
            if ($request->hasFile('image')) {
                $uploadedPath = $request->file('image')->store('public/cycle');
                $uploadedPath = 'cycle/' . basename($uploadedPath);
            }
        }

        $this->template->hero_area = json_encode([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $uploadedPath,
            'button' => json_decode($request->input('button')),
            // 'background_color' => $request->input('background_color'),
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
        $featureArea = $this->template->features_area;
        $uploadedPath = null;

        if ($featureArea) {
            if ($request->hasFile('image')) {
                $decodedData = json_decode($featureArea);
                if ($decodedData && isset($decodedData->image)) {
                    $oldImagePath = storage_path('app/public/' . $decodedData->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $uploadedPath = $request->file('image')->store('public/cycle');
                $uploadedPath = 'cycle/' . basename($uploadedPath);
            }
        } else {
            if ($request->hasFile('image')) {
                $uploadedPath = $request->file('image')->store('public/cycle');
                $uploadedPath = 'cycle/' . basename($uploadedPath);
            }
        }
        $this->template->features_area = json_encode([
            'feature_title' => $request->input('feature_title'),
            'feature_subtitle' => $request->input('feature_subtitle'),
            'feature_product_description' => $request->input('feature_product_description'),
            'image' => $uploadedPath,
        ]);

        $this->template->save();
        return response()->json([
            'success'=>true,
            'message' => 'Our Product Area Updated.',
            'data' => $this->template->feature_area,
            'prductImage'=>$uploadedPath
        ]);
    }

    public function updateAboutArea(Request $request)
    {
        
        $aboutArea = $this->template->about_area;
        $uploadedPath = null;

        if ($aboutArea) {
            if ($request->hasFile('image')) {
                $decodedData = json_decode($aboutArea);

                if ($decodedData && isset($decodedData->image)) {
                    $oldImagePath = storage_path('app/public/' . $decodedData->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $uploadedPath = $request->file('image')->store('public/cycle');
                $uploadedPath = 'cycle/' . basename($uploadedPath);
            }
        } else {
            if ($request->hasFile('image')) {
                $uploadedPath = $request->file('image')->store('public/cycle');
                $uploadedPath = 'cycle/' . basename($uploadedPath);
            }
        }

      
        $this->template->about_area = json_encode([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'background_color' => $request->input('background_color'),
            'image' => $uploadedPath,
        ]);
        $this->template->save();
        return response()->json([
            'message' => 'About Area Updated.',
            'data' => $this->template->about_area,
            'aboutImage'=>$uploadedPath
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

                $uploadedPath = $request->file($image)->store('public/cycle');
                $uploadedPaths[$index] = 'cycle/' . basename($uploadedPath);
            }
        }

        foreach ($testimonials as $index => $testimonial) {
            $testimonialImage = $uploadedPaths[$index] ?? $this->template->testimonials[$index]->reviewer_image ?? null;

            if (isset($testimonial->id)) {
                TemplateTestimonial::where('id', $testimonial->id)->update([
                    'review' => $testimonial->review,
                    'reviewer_name' => $testimonial->reviewer_name,
                    'reviewer_bio' => $testimonial->reviewer_bio??"",
                    'reviewer_image' => $testimonialImage??""
                ]);
            } else {
                TemplateTestimonial::create([
                    'template_id' => $this->templateId,
                    'user_id' => $this->userId,
                    'review' => $testimonial->review,
                    'reviewer_name' => $testimonial->reviewer_name,
                    'reviewer_bio' => $testimonial->reviewer_bio??"",
                    'reviewer_image' => $testimonialImage??""
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
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'mapIframe' => $request->input('mapIframe'),
            'footerBg' => $request->input('footerBg'),
        ]);

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
            'success'=>true,
            'message' => 'Product Info Updated.',
            'data' => $template
        ]);
    }
}