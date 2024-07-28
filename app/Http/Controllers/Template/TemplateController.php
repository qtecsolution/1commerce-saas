<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\Template\Template;
use App\Models\Template\UserTemplate;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TemplateController extends Controller
{
    public $templates = [];

    public function __construct()
    {
        $this->templates = Template::all();
    }

    public function show($slug)
    {
        $template = $this->templates->where('slug', $slug)->first();
        if ($template) {
            return view('template.show.' . $template->blade_path, compact('template'));
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

    public function selectTemplate(Request $request, $id)
    {
        $template = $this->templates->where('id', $id)->first();
        if ($template) {
            $userTemplate = UserTemplate::where('user_id', auth()->id())->where('template_id', $template->id)->first();
            if ($userTemplate) {
                Alert::error('Oops!', 'Template Already Added.')->persistent('Close');
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
                'template_id' => 'required|exists:templates,id',
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

            Alert::success('Success!', 'Template Added Successfully.')->persistent('Close');
            return to_route('templates.index');
        } else {
            return view('template.setup', compact('template'));
        }
    }

    public function mine()
    {
        $templates = UserTemplate::with('template')->where('user_id', auth()->id())->get();
        return view('template.mine', compact('templates'));
    }

    public function edit($id)
    {
        $userTemplate = UserTemplate::with('template')->findOrFail($id);
        return view('template.edit.' . $userTemplate->template->slug . '.' . $userTemplate->template->blade_path, compact('userTemplate'));
    }
}
