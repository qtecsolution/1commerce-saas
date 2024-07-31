<?php

namespace App\Http\Controllers\Template;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Template\Template;
use App\Http\Controllers\Controller;
use App\Models\Template\UserTemplate;
use App\Models\Template\UlaunchTemplate;
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
                'company_slug' => [
                    'required',
                    'unique:user_templates,company_slug',
                    'regex:/^[\S]+$/', // No spaces allowed
                ],
                'product_name' => 'required',
                'product_price' => 'required|numeric',
                'product_currency' => 'required|string',
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
                'company_slug' => Str::slug($request->company_slug),
                'product_name' => $request->company_slug,
                'product_price' => $request->product_price,
                'product_currency' => $request->product_currency
            ]);

            switch ($request->template_id) {
                case 1:
                    UlaunchTemplate::create([
                        'user_id' => auth()->id()
                    ]);
                    break;

                default:
                    # code...
                    break;
            }

            Alert::success('Success!', 'Template Added Successfully.')->persistent('Close');
            return to_route('templates.mine');
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
        if ($userTemplate->template_id == 1) {
            $template = UlaunchTemplate::with([
                'steps',
                'features',
                'testimonials',
            ])->where('user_id', auth()->id())->first();
        }

        return view('template.edit.' . $userTemplate->template->slug . '.' . $userTemplate->template->blade_path, compact('userTemplate', 'template'));
    }

    public function slugAvailability(Request $request)
    {
        if (UserTemplate::where('company_slug', $request->slug)->exists()) {
            return response()->json([
                'status' => false
            ]);
        } else {
            return response()->json([
                'status' => true
            ]);
        }
    }
}
