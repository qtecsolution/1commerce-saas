<?php

namespace App\Http\Controllers\Template;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Template\TemplateStep;
use App\Models\Template\SeedeeTemplate;
use App\Models\Template\TemplateFeature;
use App\Models\Template\UserTemplate;

class SeedeeTemplateController extends Controller
{
    private $template;
    private $userId;
    private $templateId = 2;

    public function __construct()
    {
        $this->middleware(function (Request $request, $next) {
            if (!auth()->check()) {
                return to_route('sign_in');
            }

            $this->userId = auth()->id();
            $this->template = SeedeeTemplate::where('user_id', $this->userId)->first();
            return $next($request);
        });
    }

    public function initialSetup($user_id)
    {
        SeedeeTemplate::create([
            'user_id' => $user_id,
            'status' => 1,
            'color' => json_encode([
                "foreground_color" => "#ffffff",
                "background_color" => "#cae9d7",
                "primary_text_color" => "#004111",
                "secondary_text_color" => "#000000",
            ]),
            'hero_area' => json_encode([
                "title" => "সুপার “সিড“ শরীরের শক্তি ও কর্মক্ষমতা বাড়ানোর জন্য খুবই উপকারী",
                "description" => "এতে আছে প্রচুর ওমেগা-৩ ফ্যাটি অ্যাসিড, কোয়েরসেটিন, কেম্পফেরল, ক্লোরোজেনিক অ্যাসিড ও ক্যাফিক অ্যাসিড নামক অ্যান্টি-অক্সিডেন্ট, পটাশিয়াম, ম্যাগনেশিয়াম, আয়রন, ক্যালসিয়াম এবং দ্রবণীয়",
                "image" => null,
                "button" => [
                    "title" => "অর্ডার করতে চাই",
                    "url" => "#order",
                    "color" => "#ffc100",
                    "text_color" => "#000000",
                    "border_color" => "#ffc100",
                    "hover_color" => "#ffc100",
                    "hover_text_color" => "#ffffff",
                    "hover_border_color" => "#ffc100"
                ],
                "bottom_description" => "সিড পুষ্টিকর খাবার। এতে আছে দুধের চেয়ে ৫ গুণ বেশি ক্যালসিয়াম, কমলার চেয়ে ৭ গুণ বেশি ভিটামিন সি, পালং শাকের চেয়ে ৩ গুণ বেশি আয়রন, কলার চেয়ে দ্বিগুণ পটাশিয়াম, মুরগির ডিম থেকে ৩ গুণ বেশি প্রোটিন, স্যামন মাছের চেয়ে ৮ গুণ বেশি ওমেগা-৩।",
                "bottom_button" => [
                    "title" => "অর্ডার করতে চাই",
                    "url" => "#order",
                    "color" => "#ffc100",
                    "text_color" => "#000000",
                    "border_color" => "#ffc100",
                    "hover_color" => "#ffc100",
                    "hover_text_color" => "#ffffff",
                    "hover_border_color" => "#ffc100"
                ],
            ]),
            'features_area' => json_encode([
                "title" => "সিড খাওয়ার উপকারিতা",
                "image" => null,
                "background_color" => "#004111"
            ]),
            'about_area' => json_encode([
                "title" => "আমাদের উপর কেন আস্থা রাখবেন ??",
                "sub_title" => "প্রয়োজনে কল করুন- 01230 42 42 42 , 01234 56 78 90",
                "title_background_color" => "#004111",
                "sub_title_background_color" => "#004111",
            ]),
            'order_area' => json_encode([
                "title" => "“সিড“ নেয়ার জন্য, নিচের ফর্মটি সম্পূর্ণ পূরণ করুন",
                "background_color" => "#e8f5ed",
                "display_payment_option" => 1,
                "payment_title" => "Payment Type",
                "payment_sub_title" => "Cash On Delivery",
                "payment_tag" => "Pay with cash upon delivery.",
                "display_shipping_charge" => 1,
                "product_tag" => "400 g",
                "shipping_charge_text" => "Shipping Cost",
                "subtotal_text" => "Subtotal",
                "customer_name_text" => "নাম (Name)*",
                "customer_phone_text" => "মোবাইল নাম্বার (Mobile No)*",
                "delivery_address_text" => "ডেলিভারি ঠিকানা (Delivery Address)*",
                "image" => null,
                "button" => [
                    "title" => "Place Order",
                    "color" => "#dc3545",
                    "text_color" => "#ffffff",
                    "border_color" => "#dc3545",
                    "hover_color" => "#dc3545",
                    "hover_text_color" => "#000000",
                    "hover_border_color" => "#000000"
                ],
            ]),
            'footer_area' => json_encode([
                'display_footer' => 1,
                'title' => "01230 42 42 42",
                'color' => "#004111",
                'background_color' => "#86CD91",
            ]),
        ]);

        // Define the variations for title and position
        $variations = [
            ['title' => 'সিডে থাকা ওমেগা-৩ হৃদরোগের ঝুঁকি কমাতে এবং ক্ষতিকর কোলেস্টেরল দূর করতে কাজ করে।', 'position' => 1],
            ['title' => 'দিনে দুই চা চামচ সিড শরীরের শক্তি দেয় এবং কর্মক্ষমতা বাড়ায়।', 'position' => 2],
            ['title' => 'প্রচুর পরিমাণে অ্যান্টি-অক্সিডেন্ট থাকায় সিড রোগ প্রতিরোধ ক্ষমতাকে আরও শক্তিশালী করে।', 'position' => 3],
            ['title' => 'মেটাবলিক সিস্টেমকে উন্নত করার মাধ্যমে এটি ওজন কমাতে সহায়তা করে।', 'position' => 4],
            ['title' => 'সিড ব্লাড সুগার (রক্তের চিনি) স্বাভাবিক রাখে, যা ডায়াবেটিস হওয়ার ঝুঁকি কমায়', 'position' => 5],
            ['title' => 'হাড়ের স্বাস্থ্য রক্ষায় সিড দারুণ কাজ করে। কারণ এতে আছে প্রচুর পরিমাণ ক্যালসিয়াম।', 'position' => 6],
            ['title' => 'সিড কোলন পরিষ্কার রাখতে কাজ করে বলে কোলন ক্যানসারের ঝুঁকি কমে।', 'position' => 7],
            ['title' => 'সিড শরীর থেকে বিষাক্ত পদার্থ বের করে আনে। দূর করে অ্যাসিডিটির সমস্যা। সিড পেটের প্রদাহজনিত বা গ্যাসের সমস্যা দূর করে।', 'position' => 8],
            ['title' => 'সিড ভালো ঘুম হতেও সাহায্য করে। সিড ক্যানসার রোধ করে।', 'position' => 9],
            ['title' => 'সিড হজমে সহায়তা করে।', 'position' => 10],
            ['title' => 'বীজ হাঁটু ও জয়েন্টের ব্যথা দূর করে।', 'position' => 11],
            ['title' => 'এটি ত্বক, চুল ও নখ সুন্দর রাখে।', 'position' => 12],
        ];

        foreach ($variations as $variation) {
            TemplateFeature::create([
                'user_id' => $user_id,
                'template_id' => 2,
                'icon' => null,
                'title' => $variation['title'],
                'description' => null,
                'position' => $variation['position'],
                'is_active' => 1,
            ]);
        }

        // Define the steps for title and position
        $steps = [
            ['title' => 'প্রোডাক্ট হাতে পেয়ে, দেখে, কোয়ালিটি চেক করে পেমেন্টে করার সুবিধা ।', 'position' => 1],
            ['title' => 'প্রোডাক্ট পছন্দ না হলে সাথে সাথে রিটার্ন দিতে পারবেন ।', 'position' => 2],
            ['title' => 'সারা বাংলাদেশে কুরিয়ারের মাধ্যমে হোম ডেলিভারি পাবেন ।', 'position' => 3],
            ['title' => 'যে কোন সময় আমাদের সাথে যোগাযোগ করতে পারবেন ।', 'position' => 4],
        ];

        foreach ($steps as $step) {
            TemplateStep::create([
                'user_id' => $user_id,
                'template_id' => 2,
                'icon' => null,
                'title' => $step['title'],
                'description' => null,
                'position' => $step['position'],
                'is_active' => 1,
            ]);
        }

        return true;
    }

    public function updateProductDetails(Request $request)
    {
        $userTemplate = UserTemplate::where('template_id',  $this->templateId)->where('user_id', $this->userId)->first();
        if (!$userTemplate) {
            return response()->json(['success' => false, 'error' => 'Template not purchased']);
        }

        $userTemplate->product_name = $request->product_name;
        $userTemplate->product_price = $request->product_price;
        $userTemplate->product_currency = $request->product_currency;
        $userTemplate->shipping_cost = $request->shipping_cost;
        $userTemplate->save();

        return response()->json(['success' => true]);
    }

    public function updateContentArea(Request $request)
    {
        if ($request->hero_area) {
            $this->template->hero_area = $request->input('hero_area');
        }
        if ($request->features_area) {
            $this->template->features_area = $request->input('features_area');
        }
        if ($request->about_area) {
            $this->template->about_area = $request->input('about_area');
        }
        if ($request->order_area) {
            $this->template->order_area = $request->input('order_area');
        }
        if ($request->footer_area) {
            $this->template->footer_area = $request->input('footer_area');
        }
        $this->template->save();

        return response()->json(['success' => true]);
    }

    public function updateHeroImage(Request $request)
    {
        $heroArea = $this->template->hero_area;
        if ($request->hasFile('image')) {
            $decodedData = json_decode($heroArea);

            if ($decodedData && isset($decodedData->image)) {
                $oldImagePath = storage_path('app/public/' . $decodedData->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $uploadedPath = $request->file('image')->store('public/seedee');
            $uploadedPath = 'seedee/' . basename($uploadedPath);

            return response()->json(['success' => true, 'imagePath' => $uploadedPath]);
        }

        return response()->json(['success' => false, 'error' => 'No file found']);
    }

    public function updateFeatureImage(Request $request)
    {
        $featuresArea = $this->template->features_area;
        if ($request->hasFile('image')) {
            $decodedData = json_decode($featuresArea);

            if ($decodedData && isset($decodedData->image)) {
                $oldImagePath = storage_path('app/public/' . $decodedData->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $uploadedPath = $request->file('image')->store('public/seedee');
            $uploadedPath = 'seedee/' . basename($uploadedPath);

            return response()->json(['success' => true, 'imagePath' => $uploadedPath]);
        }

        return response()->json(['success' => false, 'error' => 'No file found']);
    }

    public function updateOrderImage(Request $request)
    {
        $featuresArea = $this->template->order_area;
        if ($request->hasFile('image')) {
            $decodedData = json_decode($featuresArea);

            if ($decodedData && isset($decodedData->image)) {
                $oldImagePath = storage_path('app/public/' . $decodedData->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $uploadedPath = $request->file('image')->store('public/seedee');
            $uploadedPath = 'seedee/' . basename($uploadedPath);

            return response()->json(['success' => true, 'imagePath' => $uploadedPath]);
        }

        return response()->json(['success' => false, 'error' => 'No file found']);
    }

    public function updateFeatureAndStep(Request $request)
    {
        if ($request->type == 'feature') {
            $item = TemplateFeature::find($request->id);
        }
        if ($request->type == 'step') {
            $item = TemplateStep::find($request->id);
        }
        if (!$item) {
            return response()->json(['success' => false, 'error' => 'Item not found']);
        }

        $item->title = $request->title;
        $item->save();

        return response()->json(['success' => true]);
    }

    public function deleteFeatureOrStep(Request $request)
    {
        if ($request->type == 'feature') {
            $item = TemplateFeature::find($request->id);
        }
        if ($request->type == 'step') {
            $item = TemplateStep::find($request->id);
        }
        if (!$item) {
            return response()->json(['success' => false, 'error' => 'Item not found']);
        }

        $item->delete();

        return response()->json(['success' => true]);
    }

    public function addFeatureOrStep(Request $request)
    {
        if ($request->type == 'feature') {
            $item = TemplateFeature::create([
                'user_id' => $this->userId,
                'template_id' => $this->templateId,
                'icon' => null,
                'title' => '-- New Row --',
                'description' => null,
                'position' => 0,
                'is_active' => 1,
            ]);
        }
        if ($request->type == 'step') {
            $item = TemplateStep::create([
                'user_id' => $this->userId,
                'template_id' => $this->templateId,
                'icon' => null,
                'title' => '-- New Row --',
                'description' => null,
                'position' => 0,
                'is_active' => 1,
            ]);
        }
        if (!$item) {
            return response()->json(['success' => false, 'error' => 'Error creating item']);
        }

        return response()->json(['success' => true, 'newItem' => $item]);
    }

    public function updatePageSetup(Request $request)
    {

        $this->template->color = $request->input('color');
        $this->template->save();

        $uploadedPath = null;
        if ($request->hasFile('image')) {
            $userTemplate = UserTemplate::where('template_id',  $this->templateId)->where('user_id', $this->userId)->first();

            if ($userTemplate && isset($userTemplate->company_logo)) {
                $oldImagePath = storage_path('app/public/' . $userTemplate->company_logo);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $uploadedPath = $request->file('image')->store('public/seedee');
            $uploadedPath = 'seedee/' . basename($uploadedPath);

            $userTemplate->company_logo = $uploadedPath;
            $userTemplate->save();
        }

        return response()->json(['success' => true, 'imagePath' => $uploadedPath]);
    }
}
