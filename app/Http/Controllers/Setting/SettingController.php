<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Template\UserTemplate;
use App\Models\TrackingApi;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function settings($id)
    {
        $userTemplate = UserTemplate::find($id);
        $trackingApi = TrackingApi::where('user_template_id', $id)->first();
        return view('customer.setting.settings', compact('trackingApi', 'userTemplate'));
    }

    // function to update and create customer tracking api
    public function createApi(Request $request)
    {
        $updateApi = TrackingApi::where('user_template_id', $request->id)->first();

        if ($updateApi) {
            $updateApi->update([
                'fb_varification_key' => $request->fb_varification_key,
                'fb_pixel_value' => $request->fb_pixel,
                'gtm_head_value' => $request->gtm_head_key,
                'gtm_body_value' => $request->gtm_body_value,
            ]);
        } else {
            $newApi = new TrackingApi();
            $newApi->user_template_id = $request->user_template_id;
            $newApi->fb_varification_key = $request->fb_varification_key;
            $newApi->fb_pixel_value = $request->fb_pixel;
            $newApi->gtm_head_value = $request->gtm_head_value;
            $newApi->gtm_body_value = $request->gtm_body_value;
            $newApi->save();
        }

        // return to customer settings
        toast('Updated successfully.', 'success');
        return redirect()->back();
    }
}
