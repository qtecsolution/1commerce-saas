<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\Template\UserTemplate;
use App\Models\TemplateSeoTag;
use Illuminate\Http\Request;

class TemplateSeoTagController extends Controller
{
    public function store($userTemplateId)
    {
        $userTemplate = UserTemplate::findOrFail($userTemplateId);

        $templateSeoTags = [
            'title' => $userTemplate->product_name,
            'description' => $userTemplate->product_name,
            'og:title' => $userTemplate->product_name,
            'og:description' => $userTemplate->product_name,
            'og:type' => 'website',
            'og:url' => env('APP_URL') . '/shop/' . $userTemplate->company_slug,
            'og:image' =>  fetchImage($userTemplate->company_logo, $userTemplate->template->assets_path . '/images/logo.png'),
            'og:image:width' => '1200',
            'og:image:height' => '630',
            'og:locale' => 'en_US',
            'og:site_name' => $userTemplate->company_name,
        ];

        TemplateSeoTag::create([
            'user_template_id' => $userTemplateId,
            'tags' => json_encode($templateSeoTags),
        ]);

        return response()->json(['success' => true]);
    }
}
