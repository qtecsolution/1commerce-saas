<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\OrderFormAdditionalField;
use App\Models\Template\TemplateFeature;
use App\Models\Template\TemplateSection;
use App\Models\Template\TemplateSectionElement;
use App\Models\Template\TemplateTestimonial;
use App\Models\Template\UserTemplate;
use Illuminate\Http\Request;

class CosmeticTemplateController extends Controller
{
    public function initialSetup($userId)
    {
        $userTemplate = UserTemplate::where('user_id', $userId)->first();

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
            'text_color' => '#6e6d70'
        ]);

        TemplateSectionElement::create([
            'template_section_id' => $information->id,
            'name' => 'information',
            'data' => json_encode([
                'title' => 'Information',
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


        $clientSays = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'clients_says',
            'title' => 'Says Clients',
            'bg_color' => '#f5f4f5',
            'text_color' => '#6f6e71',
        ]);

        TemplateSectionElement::create([
            'template_section_id' => $clientSays->id,
            'name' => 'clients_says',
            'data' => json_encode([
                'description' => "use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                middle of text. All the Lorem Ipsum generators on the",
                'items' => [
                    [
                        'bg_color' => '#f67b18',
                        'hover_color' => '#5502bb',
                        'text_color' => 'white',
                        'title' => 'Client Name Here',
                        'description' => 'Description Here...'
                    ],
                    [
                        'bg_color' => '#f67b18',
                        'hover_color' => '#5502bb',
                        'text_color' => 'white',
                        'title' => 'Client Name Here',
                        'description' => 'Description Here...'
                    ],
                    [
                        'bg_color' => '#f67b18',
                        'hover_color' => '#5502bb',
                        'text_color' => 'white',
                        'title' => 'Client Name Here',
                        'description' => 'Description Here...'
                    ],
                ]
            ])
        ]);

        // Create order section
        $order = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'order',
            'title' => 'Order Now',
        ]);

        OrderFormAdditionalField::create([
            'user_template_id' => $userTemplate->id,
            'title' => 'Name',
            'name' => 'name',
            'type' => 'text',
            'placeholder' => 'Your Name',
            'is_required' => 1,
            'order' => 1
        ]);

        OrderFormAdditionalField::create([
            'user_template_id' => $userTemplate->id,
            'title' => 'Email',
            'name' => 'email',
            'type' => 'email',
            'placeholder' => 'Email',
            'is_required' => 1,
            'order' => 2
        ]);
        OrderFormAdditionalField::create([
            'user_template_id' => $userTemplate->id,
            'title' => 'Phone',
            'name' => 'phone',
            'type' => 'text',
            'placeholder' => 'Your Phone',
            'is_required' => 1,
            'order' => 3
        ]);

        OrderFormAdditionalField::create([
            'user_template_id' => $userTemplate->id,
            'title' => 'Quantity',
            'name' => 'quantity',
            'type' => 'number',
            'placeholder' => 'Quantity',
            'is_required' => 1,
            'order' => 4
        ]);

        OrderFormAdditionalField::create([
            'user_template_id' => $userTemplate->id,
            'title' => 'Address',
            'name' => 'address',
            'type' => 'textarea',
            'placeholder' => 'Address',
            'is_required' => 1,
            'order' => 5
        ]);

        // Create footer section
        $footer = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'footer'
        ]);

        TemplateSectionElement::create([
            'template_section_id' => $footer->id,
            'name' => 'footer',
            'data' => json_encode([
                'text' => '© 2024 All Rights Reserved. QTEC SL'
            ])
        ]);
    }
}
