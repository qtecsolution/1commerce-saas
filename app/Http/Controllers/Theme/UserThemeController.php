<?php

namespace App\Http\Controllers\Theme;

use App\Models\UserTheme;
use Illuminate\Http\Request;
use App\Models\UserThemeElement;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $themes = UserTheme::where('user_id', auth()->id())->get();
        return view('customer.template.my-templates', compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // data validation
        $request->validate([
            'template_id' => 'required|integer',
            'product_id' => 'required|exists:products,id',
            'slug' => 'required'
        ]);

        // check the slug is exist or not
        $page = UserTheme::where('user_id', auth()->id())
            ->where('slug', $request->slug)->first();
        if (!empty($page)) {
            return redirect()->back()->with([
                'message' => 'The page link is already exist.'
            ]);
        }

        // import theme
        $theme = new UserTheme();
        $theme->user_id = auth()->id();
        $theme->theme_id = $request->input('template_id');
        $theme->product_id = $request->input('product_id');
        $theme->slug = $request->input('slug');
        $theme->save();

        // return to my templates
        toast('Theme created successfully.', 'success');
        return redirect()->route('my-themes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user_theme = UserTheme::with('theme_elements')->find($id);
        return view('customer.template.edit-templates.template-' . $user_theme->theme_id, compact('user_theme'));
    }

    // public function updateTemplateTwoSectionOne(Request $request)
    // {
    //     $user_theme = UserThemeElement::where('element_id', $request->section_id)->where('user_theme_id', $request->theme_id)->first();

    //     $contentArr['section_one_header'] = $request->section_one_header_text;
    //     $saveContent = json_encode($contentArr);

    //     if ($user_theme) {
    //         $user_theme->text_content = $saveContent;
    //         $user_theme->save();
    //     } else {
    //         $user_theme_save = UserTheme::with('theme_elements')->find($request->theme_id);
    //         $user_theme_save->theme_elements()->create([
    //             'element_id' => $request->section_id,
    //             'user_theme_id' => $request->theme_id,
    //             'status' => 1,
    //             'text_content' => $saveContent,
    //         ]);
    //     }
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        UserTheme::find($id)->delete();

        toast('Theme removed successfully.', 'success');
        return redirect()->back();
    }
}
