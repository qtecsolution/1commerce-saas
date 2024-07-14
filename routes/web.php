<?php

use App\Http\Controllers\FrontEnd\PackageController as FrontEnd_PackageController;

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Courier\CourierController;
use App\Http\Controllers\Courier\UserCourierController;
use App\Http\Controllers\Dashboard\AdminDashboard;
use App\Http\Controllers\Dashboard\CustomerDashboard;
use App\Http\Controllers\Package\PackageController;
use App\Http\Controllers\Pos\PosCartController;
use App\Http\Controllers\Product\BrandController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\CategoryController;
use App\Http\Controllers\Purchase\PurchaseCartController;
use App\Http\Controllers\Pos\PosController;
use App\Http\Controllers\User\ShopController;
use App\Http\Controllers\Purchase\PurchaseController;
use App\Http\Controllers\Order\OderController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\User\SupplierController;
use App\Http\Controllers\User\CustomerController;
use App\Http\Controllers\Product\ProductVariationController;
use App\Http\Controllers\Theme\TemplateController;
use App\Http\Controllers\Ticket\SupportTicketController;
use App\Http\Controllers\Test\TestController;
use App\Http\Controllers\Theme\UserThemeController;
use App\Http\Controllers\Theme\UserThemeElementController;
use App\Http\Controllers\User\SubscriptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
|--------------------------------------------------------------------------
|   # front-end routes
|--------------------------------------------------------------------------
*/

// shop routes
Route::domain('{shop}.' . env('APP_URL'))->group(function () {
    //  home page
    Route::get('/{slug}', [ShopController::class, 'index'])->name('user_shop');
});

// package route
Route::get('/', [FrontEnd_PackageController::class, 'index'])->name('web_packages');
Route::get('/select-package/{id}', [FrontEnd_PackageController::class, 'select_package'])->name('select_package');

/*
|--------------------------------------------------------------------------
|   # authentication routes
|--------------------------------------------------------------------------
*/

Route::match(['get', 'post'], '/sign-in', [UserController::class, 'sign_in'])->name('sign_in');
Route::match(['get', 'post'], '/sign-up', [UserController::class, 'sign_up'])->name('sign_up');
Route::get('/sign-out', [UserController::class, 'sign_out'])->name('sign_out');

/*
|--------------------------------------------------------------------------
|   # customer routes
|--------------------------------------------------------------------------
*/

Route::prefix('/app')->middleware('user')->group(function () {
    // dashboard route
    Route::get('/', [CustomerDashboard::class, 'index'])->name('user_dashboard');

    // profile routes
    Route::get('/profiles', [UserController::class, 'user_profiles'])->name('user_profiles');
    Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('update_profile');
    Route::post('/update-password', [UserController::class, 'updatePassword'])->name('update_password');

    // theme routes
    Route::resource('/themes', TemplateController::class);
    Route::get('/theme/{code}', [TemplateController::class, 'show_template'])->name('show_template');

    Route::resource('my-themes', UserThemeController::class);
    Route::get('/api/theme-element/{id}', [UserThemeElementController::class, 'get_element'])->name('get_theme_element');

    // shop routes
    Route::resource('/shops', ShopController::class);

    // customer routes
    Route::resource('customers', CustomerController::class);

    // ticket routes
    Route::resource('tickets', SupportTicketController::class);
    Route::get('inspect-ticket/{id}', [SupportTicketController::class, 'customerInspectTicket'])->name('customer_inspect_ticket');
    Route::post('reply-support-ticket', [SupportTicketController::class, 'customerReplyTicket'])->name('customer_reply_support_ticket');

    // order routes
    Route::controller(OderController::class)->group(function () {
        Route::get("/orders", "index")->name('orders');
        Route::get("/return-orders", "returnOrders")->name('return_orders');
        Route::get("/order-details/{invoice}", "orderDetails")->name('order_details');
    });

    // setting routes
    Route::controller(SettingController::class)->group(function () {
        Route::get("/settings", "settings")->name('settings');
        Route::post('/tracking-api', 'createApi')->name('tracking_api');
    });

    // subscription routes
    Route::resource('/subscription', SubscriptionController::class);
});

/*
|--------------------------------------------------------------------------
|   # admin routes
|--------------------------------------------------------------------------
*/

Route::prefix('/admin')->middleware('admin')->group(function () {
    // admin dashboard
    Route::get('/', [AdminDashboard::class, 'index'])->name('admin_dashboard');

    // packages
    Route::resource('/packages', PackageController::class);

    // ticket routes
    Route::controller(SupportTicketController::class)->group(function () {
        Route::get("/support-tickets", "tickets")->name('support_tickets');
        Route::get('/delete-support-ticket/{id}', 'delete')->name('delete_support_ticket');
        Route::get('/inspect-support-ticket/{id}', 'inspectTicket')->name('inspect_support_ticket');
        Route::post('/reply-support-ticket', 'replyTicket')->name('admin_reply_support_ticket');
        Route::get('/support-ticket-status/{id}/{status}', 'status')->name('support_ticket_status');
    });
});


/*
|--------------------------------------------------------------------------
|   # test routes
|--------------------------------------------------------------------------
*/

Route::get('/test', [TestController::class, 'index']);
