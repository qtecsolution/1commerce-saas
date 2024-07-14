<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TemplateController extends Controller
{
    private $templates = [
        [
            'slug' => 'template-1',
            'name' => 'Template 1',
            'assets' => 'ULaunch',
            'blade' => 'ulaunch',
        ]
    ];

    public function show($slug)
    {
        $template = collect($this->templates)->where('slug', $slug)->first();
        if ($template) {
            return view('template.' .$template['blade'], compact('template'));
        } else {
            Alert::error('Oops!', 'Template Not Found')->persistent('Close');
            return redirect()->back();
        }
    }
}
