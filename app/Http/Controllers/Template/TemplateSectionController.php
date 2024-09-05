<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\Template\TemplateFeature;
use App\Models\Template\TemplateSection;
use App\Models\Template\TemplateSectionElement;
use App\Models\Template\UserTemplate;
use Illuminate\Http\Request;

class TemplateSectionController extends Controller
{
    public function updateSection(Request $request, $id)
    {
        $section = TemplateSection::findOrFail($id);
        $section->update([
            'title' => $request->title ?? $section->title,
            'sub_title' => $request->sub_title ?? $section->sub_title,
            'bg_color' => $request->bg_color ?? $section->bg_color,
            'text_color' => $request->text_color ?? $section->text_color,
        ]);

        return response()->json(['section' => $section], 200);
    }

    public function getSection($id)
    {
        $section = TemplateSection::with('elements')->find($id);

        if (!$section) {
            return response()->json(['error' => 'Section not found'], 404);
        }

        return response()->json(['section' => $section], 200);
    }

    public function updateElement(Request $request, $sectionId)
    {
        // Validate the request
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // 2MB Max
            'name' => 'required|string',
            'prefix' => 'nullable|string',
            'value' => 'nullable|string',
            'status' => 'nullable|boolean'
        ]);

        // Ensure the section exists
        $section = TemplateSection::find($sectionId);
        if (!$section) {
            return response()->json(['error' => 'Section not found'], 404);
        }

        // Ensure the element exists
        $element = TemplateSectionElement::where('template_section_id', $sectionId)
            ->where('name', $validatedData['name'])
            ->first();
        if (!$element) {
            return response()->json(['error' => 'Element not found'], 404);
        }

        // Decode the element data
        $elementData = json_decode($element->data, true) ?? [];

        // Handle image upload
        if ($request->hasFile('image')) {
            // Remove the old image if exists
            if (isset($elementData['image'])) {
                fileRemove($elementData['image']);
            }

            // Upload the new image
            $elementData['image'] = fileUpload($request->file('image'), "templates/elements");
        }

        if ($request->prefix == 'items') {
            // $elementData[$request->prefix] = explode(',', $request->value);
            $elementData[$request->prefix] = json_decode($request->value);
        }

        if ($request->prefix == 'button') {
            $elementData[$request->prefix] = json_decode($request->value, true);
        }

        // Update the specified prefix with the new value if provided
        if (!is_null($request->prefix) && !is_null($request->value) && $request->value != 'null') {
            if ($request->prefix != 'items' && $request->prefix != 'button') {
                $elementData[$request->prefix] = $request->value;
            }
        }

        // Update the element data and status
        $element->update([
            'data' => json_encode($elementData),
            'status' => $request->input('status', true), // Defaults to true if not provided
        ]);

        return response()->json(['element' => $element, $request->prefix => $elementData[$request->prefix]], 200);
    }

    public function getElement($id)
    {
        $element = TemplateSectionElement::find($id);

        if (!$element) {
            return response()->json(['error' => 'Element not found'], 404);
        }

        return response()->json(['element' => $element], 200);
    }

    public function saveFeature(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // 2MB Max
        ]);

        // Retrieve the feature by ID or create a new instance
        $feature = TemplateFeature::find($request->id);
        $uploadedPath = $feature->image ?? null;

        // Check if a new image file is uploaded
        if ($request->hasFile('image')) {
            if ($feature && $feature->image) {
                // Remove the existing image
                fileRemove($feature->image);
            }

            // Upload the new image
            $uploadedPath = fileUpload($request->file('image'), 'templates/features');
        }

        // If no feature exists, create a new one
        if (!$feature) {
            $feature = new TemplateFeature();
            $feature->template_id = $request->template_id;
            $feature->user_id = auth()->id();
            $feature->position = TemplateFeature::where('template_id', $request->template_id)->count() + 1;
        }

        // Update the feature details
        $feature->image = $uploadedPath;
        $feature->title = $request->title ?? $feature->title;
        $feature->description = $request->description ?? $feature->description;
        $feature->icon = $request->icon ?? $feature->icon;
        $feature->url = $request->url ?? $feature->url;

        // Save the feature
        $feature->save();

        return response()->json(['feature' => $feature, 'image' => $uploadedPath], 200);
    }

    public function deleteFeature($id)
    {
        TemplateFeature::findOrFail($id)->delete();

        return response()->json(['success' => true]);
    }

    public function updateProductDetails(Request $request)
    {
        $userTemplate = UserTemplate::where('template_id',  $request->template_id)->where('user_id', auth()->id())->first();
        if (!$userTemplate) {
            return response()->json(['success' => false, 'error' => 'Template not purchased']);
        }

        $userTemplate->product_name = $request->product_name;
        $userTemplate->product_price = $request->product_price;
        $userTemplate->shipping_cost_inside_dhaka = $request->shipping_cost_inside_dhaka;
        $userTemplate->shipping_cost_outside_dhaka = $request->shipping_cost_outside_dhaka;
        $userTemplate->save();

        return response()->json(['success' => true]);
    }
}
