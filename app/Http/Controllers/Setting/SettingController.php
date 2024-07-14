<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\TrackingApi;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function settings()
    {
        $trackingApi = TrackingApi::where('user_id', auth()->id())->first();
        return view('customer.setting.settings', compact('trackingApi'));
    }

    // function to update and create customer tracking api
    public function createApi(Request $request)
    {
        $updateApi = TrackingApi::where('user_id', auth()->id())->first();

        if ($updateApi) {
            $updateApi->update([
                'fb_varification_key' => $request->fb_varification_key,
                'fb_pixel_value' => $request->fb_varification_key,
                'gtm_head_key' => $request->gtm_head_key,
                'gtm_body_value' => $request->gtm_body_value,
            ]);
        } else {
            $newApi = new TrackingApi();
            $newApi->user_id = auth()->id();
            $newApi->fb_varification_key = $request->fb_varification_key;
            $newApi->fb_pixel_value = $request->fb_pixel_value;
            $newApi->gtm_head_key = $request->gtm_head_key;
            $newApi->gtm_body_value = $request->gtm_body_value;
            $newApi->save();
        }

        // return to customer settings
        toast('API updated successfully.', 'success');
        return redirect()->back();
    }
}
