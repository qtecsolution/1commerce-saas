<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\Template\TemplateSection;
use App\Models\Template\TemplateSectionElement;
use Illuminate\Http\Request;

class TemplateSectionController extends Controller
{
    public function section(Request $request)
    {
        $validatedData = $request->validate([
            'user_template_id' => 'required|exists:user_templates,id',
            'section' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'bg_color' => 'required|string|max:7',
            'text_color' => 'required|string|max:7',
            'status' => 'nullable|boolean'
        ]);

        $section = TemplateSection::updateOrCreate(
            [
                'user_template_id' => $validatedData['user_template_id'],
                'section' => $validatedData['section']
            ],
            [
                'title' => $validatedData['title'],
                'sub_title' => $validatedData['sub_title'],
                'bg_color' => $validatedData['bg_color'],
                'text_color' => $validatedData['text_color'],
                'status' => $validatedData['status'] ?? true
            ]
        );

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

        return $request->all();

        // Ensure the section exists
        $section = TemplateSection::find($sectionId);
        if (!$section) {
            return response()->json(['error' => 'Section not found'], 404);
        }

        $element = TemplateSectionElement::updateOrCreate(
            [
                'template_section_id' => $sectionId,
                'name' => $validatedData['name']
            ],
            [
                'data' => $validatedData['data'],
                'status' => $validatedData['status'] ?? true
            ]
        );

        return response()->json(['element' => $element], 200);
    }

    public function getElement($id)
    {
        $element = TemplateSectionElement::find($id);

        if (!$element) {
            return response()->json(['error' => 'Element not found'], 404);
        }

        return response()->json(['element' => $element], 200);
    }
}
