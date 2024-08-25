<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\Template\UserTemplate;
use App\Models\TemplateSeoTag;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
            'og:image' =>  fetchImage($userTemplate->company_logo, $userTemplate->template->assets_path . '/images/preview.png'),
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

    public function update(Request $request)
    {
        $request->validate([
            'user_template_id' => 'required|exists:user_templates,id',
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // 2MB Max
        ]);

        $userTemplate = UserTemplate::findOrFail($request->user_template_id);
        $templateSeoTag = TemplateSeoTag::where('user_template_id', $request->user_template_id)->firstOrFail();
        $decodedTags = json_decode($templateSeoTag->tags, true);

        $imgPath = fetchImage($userTemplate->company_logo, $userTemplate->template->assets_path . '/images/preview.png');
        if ($request->hasFile('image')) {
            $oldImagePath = storage_path('app/public/' . $decodedTags['og:image']);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $request->file('image')->store('public/banners');
            $imgPath = 'banners/' . $request->file('image')->hashName();
        }

        $templateSeoTags = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'og:title' => $request->input('title'),
            'og:description' => $request->input('description'),
            'og:type' => 'website',
            'og:url' => env('APP_URL') . '/shop/' . $userTemplate->company_slug,
            'og:image' =>  $imgPath,
            'og:image:width' => '1200',
            'og:image:height' => '630',
            'og:locale' => 'en_US',
            'og:site_name' => $userTemplate->company_name,
        ];

        $templateSeoTag->update([
            'tags' => json_encode( $templateSeoTags )
        ]);

        Alert::success('Success!', 'Tags updated successfully.')->persistent('Close');
        return redirect()->back()->withFragment('seo_tags');
    }
}
