<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\Template\TemplateFeature;
use App\Models\Template\TemplateSection;
use App\Models\Template\TemplateSectionElement;
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

    public function element(Request $request, $sectionId)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'nullable|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // 2MB Max
        ]);

        // Ensure the section exists
        $section = TemplateSection::find($sectionId);
        if (!$section) {
            return response()->json(['error' => 'Section not found'], 404);
        }

        // Ensure the element exists
        $element = TemplateSectionElement::where('template_section_id', $sectionId)->where('name', $validatedData['name'])->first();
        if (!$element) {
            return response()->json(['error' => 'Element not found'], 404);
        }

        $decodeElementData = json_decode($element->data) ?? [];

        if ($request->hasFile('image')) {
            fileRemove($decodeElementData->image);
            $uploadedPath =  fileUpload($request->file('image'), 'templates/' . $sectionId . '/elements');
        }

        $decodeElementData->image = $uploadedPath ?? $decodeElementData->image;

        $element->update(
            [
                'data' => json_encode($decodeElementData),
                'status' => $validatedData['status'] ?? true
            ]
        );

        return response()->json(['element' => $element, 'image' => $uploadedPath], 200);
    }

    public function getElement($id)
    {
        $element = TemplateSectionElement::find($id);

        if (!$element) {
            return response()->json(['error' => 'Element not found'], 404);
        }

        return response()->json(['element' => $element], 200);
    }

    public function feature(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // 2MB Max
        ]);

        // Find the feature by ID, if it exists
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

        // Update or create the feature
        $updatedFeature = TemplateFeature::updateOrCreate(
            ['id' => $request->id],
            [
                'image' => $uploadedPath,
                'title' => $request->title ?? ($feature->title ?? ''),
                'description' => $request->description ?? ($feature->description ?? ''),
                'icon' => $request->icon ?? ($feature->icon ?? ''),
                'url' => $request->url ?? ($feature->url ?? ''),
            ]
        );

        return response()->json(['feature' => $updatedFeature, 'image' => $uploadedPath], 200);
    }
}
