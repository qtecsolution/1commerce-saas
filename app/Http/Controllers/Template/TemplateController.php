<?php

namespace App\Http\Controllers\Template;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Template\Template;
use App\Http\Controllers\Controller;
use App\Models\Template\UserTemplate;
use App\Models\Template\SeedeeTemplate;
use App\Models\Template\UlaunchTemplate;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Template\SeedeeTemplateController;
use App\Models\Subscription;

class TemplateController extends Controller
{
    public function __construct(
        private Template $templates,
    ) {
        $this->templates = $templates;
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
            'templates' => $this->templates->get()
        ]);
    }

    public function selectTemplate(Request $request, $id)
    {
        $template = $this->templates->where('id', $id)->first();
        if (!$template) {
            Alert::error('Oops!', 'Template Not Found.');
            return back();
        }
        if (UserTemplate::where('user_id', auth()->id())->where('template_id', $template->id)->exists()) {
            Alert::error('Oops!', 'Template Already Added.');
            return back();
        }

        // check subscription and count
        $subscription = Subscription::with('package_details')->where('user_id', auth()->id())->where('status', 1)->firstOrFail();
        if (UserTemplate::where('user_id', auth()->id())->count() >= $subscription->package_details->templates) {
            Alert::error('Oops!', 'Template Limit Reached. Upgrade Package to Add More Templates.');
            return back();
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
                'template_id' => 'required|exists:templates,id',
                'shipping_cost_inside_dhaka' => 'nullable|numeric',
                'shipping_cost_outside_dhaka' => 'nullable|numeric',
            ]);

            $path = null;
            if ($request->hasFile('company_logo')) {
                $request->file('company_logo')->store('public/users/logo');
                $path = 'users/logo/' . $request->file('company_logo')->hashName();
            }

            $userTemplate = UserTemplate::create([
                'user_id' => auth()->id(),
                'template_id' => $request->template_id,
                'company_name' => $request->company_name,
                'company_logo' => $path,
                'company_slug' => Str::slug($request->company_slug),
                'product_name' => $request->company_slug,
                'product_price' => $request->product_price,
                'shipping_cost_inside_dhaka' => $request->shipping_cost_inside_dhaka,
                'shipping_cost_outside_dhaka' => $request->shipping_cost_outside_dhaka,
            ]);

            $templateSeoTag = new TemplateSeoTagController();
            $templateSeoTag->store($userTemplate->id);

            switch ($request->template_id) {
                case 1:
                    $ulaunch = new UlaunchTemplateController();
                    $ulaunch->initialSetup(auth()->id());
                    break;
                case 2:
                    $seedee = new SeedeeTemplateController();
                    $seedee->initialSetup(auth()->id());
                    break;
                default:
                    // code
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
        $userTemplate = UserTemplate::with(['template', 'fields'])->findOrFail($id);
        if ($userTemplate->template_id == 1) {
            $template = UlaunchTemplate::with([
                'steps',
                'features',
                'testimonials',
            ])
                ->where('user_id', auth()->id())
                ->first();
        } else if ($userTemplate->template_id == 2) {
            $template = SeedeeTemplate::with([
                'steps',
                'features',
            ])
                ->where('user_id', auth()->id())
                ->first();
        } else {
            abort(404);
        }

        return view('template.edit.' . $userTemplate->template->slug, compact('userTemplate', 'template'));
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

    public function settings(Request $request, $id)
    {
        $request->validate([
            'favicon' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'title' => 'required',
        ]);

        $userTemplate = UserTemplate::with('seoTags')->findOrFail($id);
        $decodedTags = json_decode($userTemplate->seoTags->tags);

        $imgPath = $userTemplate->fav_icon;
        if ($request->hasFile('favicon')) {
            if ($userTemplate->fav_icon) {
                $oldImagePath = storage_path('app/public/' . $userTemplate->fav_icon);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $request->file('favicon')->store('public/favicons');
            $imgPath = 'favicons/' . $request->file('favicon')->hashName();
        }

        $userTemplate->fav_icon = $imgPath;

        $decodedTags->title = $request->input('title');
        $userTemplate->seoTags->tags = json_encode($decodedTags);

        $userTemplate->push();

        Alert::success('Success!', 'Resources Updated Successfully.')->persistent('Close');
        return back();
    }
}
