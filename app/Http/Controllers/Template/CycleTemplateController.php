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