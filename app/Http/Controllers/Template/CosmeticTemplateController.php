<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\OrderFormAdditionalField;
use App\Models\Template\TemplateSection;
use App\Models\Template\TemplateSectionElement;
use App\Models\Template\TemplateTestimonial;
use App\Models\Template\UserTemplate;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class CosmeticTemplateController extends Controller
{
    public function initialSetup($userId, $templateId)
    {
        $userTemplate = UserTemplate::where('user_id', $userId)->where('template_id', $templateId)->first();

        // Create header section with menu elements
        $header = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'header'
        ]);

        TemplateSectionElement::create([
            'template_section_id' => $header->id,
            'name' => 'header',
            'data' => json_encode([
                'bg_image' => null,
                'image' => null,
                'contact' => 'Call Us : +880 160000000'
            ]),
        ]);

        // Create hero section
        $hero = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'hero',
            'title' => 'Lakmē Glycolic Night Cream 15g',
            'sub_title' => 'Cream',
            'text_color' => '#ffffff',
        ]);

        TemplateSectionElement::create([
            'template_section_id' => $hero->id,
            'name' => 'hero',
            'data' => json_encode([
                'description' => 'Wake up to brighter, illuminated skin! Experience the restorative power of Glycolic Acid as your sleep. Introducing our masterfully crafted Lakmé Glycolic Illuminate Night Crème, an exceptional night cream enriched with the goodness of Glycolic Acid and Niacinamide, a true beauty sleep experience.',
                'button' => [
                    'title' => 'Order Now',
                    'url' => '#order',
                    'color' => 'transparent',
                    'text_color' => 'white',
                    'border_color' => 'white',
                    'hover_color' => '#5502bb',
                    'hover_text_color' => 'white',
                    'hover_border_color' => 'white',
                ],
                'image' => null
            ])
        ]);

        $information = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'information',
            'bg_color' => '#7122e7',
            'text_color' => '#6e6d70',
            'title' => 'Information'
        ]);

        TemplateSectionElement::create([
            'template_section_id' => $information->id,
            'name' => 'information',
            'data' => json_encode([
                'items' => [
                    'Net Quantity: 15g',
                    'Manufacturer/Company Name : Nutracos',
                    'Commodity: Night Cream',
                    'Expiry Date: 30 Months (From date of Manufacturing)'
                ],
                'image' => null,
                'image_border_color' => '#f67b18'
            ])
        ]);

        $slider = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'slider',
            'title' => 'Product Details',
        ]);

        TemplateSectionElement::create([
            'template_section_id' => $slider->id,
            'name' => 'slider',
            'data' => json_encode([
                'items' => [
                    [
                        'image' => null,
                        'description' => "The results are astounding – 90% of women witnessed visibly smoother and more radiant skin. This crème's transformative powers extend to improving radiance, deeply nourishing your skin, and leaving it silky smooth. Tested by dermatologists, this crème is suitable for all skin types. Its non-sticky, easy-to-blend formula ensures that your skin's unique needs are met, whether you have normal, dry, oily, or combination skin.Previous"
                    ],
                    [
                        'image' => null,
                        'description' => "The results are astounding – 90% of women witnessed visibly smoother and more radiant skin. This crème's transformative powers extend to improving radiance, deeply nourishing your skin, and leaving it silky smooth. Tested by dermatologists, this crème is suitable for all skin types. Its non-sticky, easy-to-blend formula ensures that your skin's unique needs are met, whether you have normal, dry, oily, or combination skin.Previous"
                    ],
                    [
                        'image' => null,
                        'description' => "The results are astounding – 90% of women witnessed visibly smoother and more radiant skin. This crème's transformative powers extend to improving radiance, deeply nourishing your skin, and leaving it silky smooth. Tested by dermatologists, this crème is suitable for all skin types. Its non-sticky, easy-to-blend formula ensures that your skin's unique needs are met, whether you have normal, dry, oily, or combination skin.Previous"
                    ],
                ],
            ])
        ]);

        $review = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'review',
            'title' => 'Reviews',
            'bg_color' => '#f5f4f5',
            'text_color' => '#6f6e71',
        ]);

        TemplateSectionElement::create([
            'template_section_id' => $review->id,
            'name' => 'review',
            'data' => json_encode([
                'description' => "use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                middle of text. All the Lorem Ipsum generators on the",
            ])
        ]);

        for ($i=0; $i < 6; $i++) { 
            $faker = Faker::create();

            TemplateTestimonial::create([
                'template_id' => $userTemplate->template_id,
                'user_id' => auth()->user()->id,
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et',
                'reviewer_name' => $faker->name,
                'reviewer_image' => null
            ]);
        }

        // Create order section
        $order = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'order',
            'title' => 'Order Now',
            'bg_color' => '#6503d2',
            'text_color' => '#000000'
        ]);

        TemplateSectionElement::create([
            'template_section_id' => $order->id,
            'name' => 'order',
            'data' => json_encode([
                'button' => [
                    'title' => 'Place Order ',
                    'url' => '#order',
                    'color' => 'transparent',
                    'text_color' => '#fa7528',
                    'border_color' => '#fa7528',
                    'hover_color' => '#fd882f',
                    'hover_text_color' => '#ffffff',
                    'hover_border_color' => '#fa7528',
                ]
            ])
        ]);

        OrderFormAdditionalField::create([
            'user_template_id' => $userTemplate->id,
            'title' => 'Name',
            'name' => 'customer_name',
            'type' => 'text',
            'placeholder' => 'Your Name',
            'is_required' => 1,
            'order' => 1
        ]);

        OrderFormAdditionalField::create([
            'user_template_id' => $userTemplate->id,
            'title' => 'Phone',
            'name' => 'customer_phone',
            'type' => 'text',
            'placeholder' => 'Your Phone',
            'is_required' => 1,
            'order' => 3
        ]);

        OrderFormAdditionalField::create([
            'user_template_id' => $userTemplate->id,
            'title' => 'Address',
            'name' => 'customer_address',
            'type' => 'textarea',
            'placeholder' => 'Address',
            'is_required' => 1,
            'order' => 5
        ]);

        // Create footer section
        $footer = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'footer',
            'bg_color' => '#fa7528',
            'text_color' => '#ffffff',
        ]);

        TemplateSectionElement::create([
            'template_section_id' => $footer->id,
            'name' => 'footer',
            'data' => json_encode([
                'text' => '© 2024 All Rights Reserved by 1commerce.'
            ])
        ]);
    }
}
