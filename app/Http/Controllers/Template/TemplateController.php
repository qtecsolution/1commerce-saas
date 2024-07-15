<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\Template\UserTemplate;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TemplateController extends Controller
{
    public $templates = [];

    public function __construct()
    {
        $this->templates = UserTemplate::$templates;
    }

    public function show($slug)
    {
        $template = collect($this->templates)->where('slug', $slug)->first();
        if ($template) {
            return view('template.show.' . $template['blade'], compact('template'));
        } else {
            Alert::error('Oops!', 'Template Not Found.')->persistent('Close');
            return redirect()->back();
        }
    }

    public function index()
    {
        return view('template.index', [
            'templates' => $this->templates
        ]);
    }

    public function selectTemplate(Request $request, $slug)
    {
        // Alert::info('Info!', 'This feature will be available soon.')->persistent('Close');
        // return redirect()->back();

        $template = collect($this->templates)->where('slug', $slug)->first();
        if ($template) {
            $userTemplate = UserTemplate::where('user_id', auth()->id())->where('template_id', $template['id'])->first();
            if ($userTemplate) {
                Alert::error('Oops!', 'Template already added.')->persistent('Close');
                return redirect()->back();
            }
        } else {
            Alert::error('Oops!', 'Template Not Found.')->persistent('Close');
            return redirect()->back();
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'company_name' => 'required',
                'company_logo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
                'product_name' => 'required',
                'template_id' => 'required|in:' . implode(',', array_column($this->templates, 'id')),
            ]);

            $path = null;
            if ($request->hasFile('company_logo')) {
                $request->file('company_logo')->store('public/users/logo');
                $path = 'users/logo/' . $request->file('company_logo')->hashName();
            }

            UserTemplate::create([
                'user_id' => auth()->id(),
                'template_id' => $request->template_id,
                'company_name' => $request->company_name,
                'company_logo' => $path,
                'product_name' => $request->product_name,
            ]);

            Alert::success('Success!', 'Template added successfully.')->persistent('Close');
            return to_route('templates.index');
        } else {
            return view('template.setup', compact('template'));
        }
    }

    public function mine()
    {
        $templates = UserTemplate::where('user_id', auth()->id())->get();
        return view('template.mine', compact('templates'));
    }

    public function edit($id)
    {
        $userTemplate = UserTemplate::findOrFail($id);
        $template = collect($this->templates)->where('id', $userTemplate->template_id)->first();

        return view('template.edit.' . $template['slug'] . '.' . $template['blade'], compact('userTemplate', 'template'));
    }
}
