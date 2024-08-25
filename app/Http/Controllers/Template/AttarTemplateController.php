<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\OrderFormAdditionalField;
use App\Models\Template\TemplateSection;
use App\Models\Template\TemplateSectionElement;
use App\Models\Template\TemplateTestimonial;
use App\Models\Template\UserTemplate;
use Illuminate\Http\Request;

class AttarTemplateController extends Controller
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
            'name' => 'menu',
            'data' => json_encode([
                ['label' => 'Home', 'url' => '/'],
                ['label' => 'About Product', 'url' => '#about'],
                ['label' => 'Fragrances', 'url' => '#fragrances'],
                ['label' => 'Ingredients', 'url' => '#ingredients'],
                ['label' => 'Features', 'url' => '#features'],
                ['label' => 'Order', 'url' => '#order'],
            ]),
        ]);

        // Create hero section
        $hero = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'hero',
            'title' => 'Attar Perfume',
            'sub_title' => 'The Essence of Purity',
            'bg_color' => '#e0a800',
            'text_color' => '#ffffff',
        ]);

        TemplateSectionElement::create([
            'template_section_id' => $hero->id,
            'name' => 'hero',
            'data' => json_encode([
                'description' => 'Experience the purity of natural essences with our exquisite collection of Attar Perfumes. Each drop encapsulates the richness of tradition and the allure of nature.',
                'button' => [
                    'title' => 'Explore Now',
                    'url' => '#order',
                    'color' => 'white',
                    'text_color' => 'black',
                    'border_color' => 'white',
                    'hover_color' => 'white',
                    'hover_text_color' => 'black',
                    'hover_border_color' => 'white',
                ],
                'image' => null
            ])
        ]);

        // Create about section
        $about = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'about',
            'title' => 'About Attar Perfume',
            'sub_title' => 'Crafted with Tradition',
        ]);

        TemplateSectionElement::create([
            'template_section_id' => $about->id,
            'name' => 'about',
            'data' => json_encode([
                'description' => 'Our Attar Perfumes are crafted with the finest natural ingredients, embodying the rich tradition of perfumery. Each scent is a journey through the lush gardens and exotic lands where these essences originate.'
            ])
        ]);

        // Create fragrances section
        $showcase = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'fragrances',
            'title' => 'Our Fragrances',
        ]);

        TemplateSectionElement::create([
            'template_section_id' => $showcase->id,
            'name' => 'fragrances',
            'data' => json_encode([
                'items' => [
                    'Rose Attar - A timeless fragrance of pure roses',
                    'Sandalwood Attar - The warmth of precious sandalwood',
                    'Oud Attar - The mystique of exotic oud',
                    'Jasmine Attar - The sweet embrace of jasmine blooms',
                    'Musk Attar - The deep, sensual notes of musk'
                ],
                'button' => [
                    'title' => 'Discover More',
                    'url' => '#order',
                    'color' => 'black',
                    'text_color' => 'white',
                    'border_color' => 'black',
                    'hover_color' => 'white',
                    'hover_text_color' => 'black',
                    'hover_border_color' => 'black',
                ],
                'image' => null
            ])
        ]);

        // Create features section
        $feature = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'features'
        ]);

        TemplateSectionElement::create([
            'template_section_id' => $feature->id,
            'name' => 'features',
            'data' => json_encode([
                [
                    'title' => '100% Natural',
                    'description' => 'Our Attar Perfumes are made from pure, natural ingredients without any synthetic additives.',
                    'image' => null
                ],
                [
                    'title' => 'Long-Lasting Fragrance',
                    'description' => 'Enjoy the lasting aroma of our perfumes that linger beautifully throughout the day.',
                    'image' => null
                ],
                [
                    'title' => 'Handcrafted with Care',
                    'description' => 'Each perfume is meticulously handcrafted to preserve the integrity of its essence.',
                    'image' => null
                ]
            ])
        ]);

        // Create review section
        $review = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'review'
        ]);

        TemplateSectionElement::create([
            'template_section_id' => $review->id,
            'name' => 'review',
            'data' => json_encode([
                'image' => null
            ])
        ]);

        // Create testimonial
        TemplateTestimonial::create([
            'template_id' => $userTemplate->template_id,
            'user_id' => 1,
            'review' => 'The Attar Perfume collection is simply mesmerizing. The scents are so pure and natural, it feels like a walk through a fragrant garden. I’m in love with every drop!',
            'reviewer_name' => 'Aisha Khan'
        ]);

        // Create order section
        $order = TemplateSection::create([
            'user_template_id' => $userTemplate->id,
            'section' => 'order',
            'title' => 'Order Now',
            'sub_title' => 'Embrace the Essence of Purity',
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
            'title' => 'Phone',
            'name' => 'phone',
            'type' => 'text',
            'placeholder' => 'Your Phone',
            'is_required' => 1,
            'order' => 2
        ]);

        OrderFormAdditionalField::create([
            'user_template_id' => $userTemplate->id,
            'title' => 'Quantity',
            'name' => 'quantity',
            'type' => 'number',
            'placeholder' => 'Quantity',
            'is_required' => 1,
            'order' => 3
        ]);

        OrderFormAdditionalField::create([
            'user_template_id' => $userTemplate->id,
            'title' => 'Address',
            'name' => 'address',
            'type' => 'textarea',
            'placeholder' => 'Address',
            'is_required' => 1,
            'order' => 4
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
                'text' => 'Copyright © 2024. All rights reserved.',
                'links' => [
                    ['label' => 'Facebook', 'url' => 'https://www.facebook.com/'],
                    ['label' => 'Twitter', 'url' => 'https://twitter.com/'],
                    ['label' => 'Instagram', 'url' => 'https://www.instagram.com/'],
                    ['label' => 'Linkedin', 'url' => 'https://www.linkedin.com/'],
                    ['label' => 'Youtube', 'url' => 'https://www.youtube.com/'],
                ]
            ])
        ]);
    }
}
