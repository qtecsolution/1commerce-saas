<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AamarPayController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\CustomDomainController;
use App\Http\Controllers\Test\TestController;
use App\Http\Controllers\User\ShopController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\FrontEnd\WebController;
use App\Http\Controllers\User\CustomerController;
use App\Http\Controllers\Dashboard\AdminDashboard;
use App\Http\Controllers\Package\PackageController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\DynamicOrderFormController;
use App\Http\Controllers\Dashboard\CustomerDashboard;
use App\Http\Controllers\Finance\WithdrawalController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Template\TemplateController;
use App\Http\Controllers\User\SubscriptionController;
use App\Http\Controllers\Ticket\SupportTicketController;
use App\Http\Controllers\Setting\PaymentMethodController;
use App\Http\Controllers\Template\SeedeeTemplateController;
use App\Http\Controllers\Template\UlaunchTemplateController;
use App\Http\Controllers\Template\CycleTemplateController;
use App\Http\Controllers\FrontEnd\PackageController as FrontEnd_PackageController;
use App\Http\Controllers\Template\TemplateSectionController;
use App\Http\Controllers\User\Finance\WalletController;
use App\Http\Controllers\Template\TemplateSeoTagController;

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
Route::domain('{subdomain}.' . env('APP_DOMAIN'))->group(function () {
    //  home page
    Route::get('/', [ShopController::class, 'index'])->name('user_shop');
});

// place order
Route::post("place-order", [ShopController::class, 'placeOrder'])->name('place_order');
Route::get("order-placed/{order_id}", [ShopController::class, 'orderPlaced'])->name('order_placed');
Route::get("order-pay/{order_id}", [ShopController::class, 'orderPayment'])->name('order_payment');
Route::post('order-payment/success', [ShopController::class, 'paymentSuccess'])->name('order_payment_success');
Route::post('order-payment/fail', [ShopController::class, 'paymentFail'])->name('order_payment_fail');

// live preview
Route::get('shop/{slug}', [ShopController::class, 'livePreview'])->name('live_preview');

// home page route
Route::get('/', [WebController::class, 'index'])->name('web.home');

// templates route
Route::get('templates/{slug}', [TemplateController::class, 'show'])->name('web.template');

// package route
Route::get('packages', [FrontEnd_PackageController::class, 'index'])->name('web.packages');
Route::get('packages/{id}', [FrontEnd_PackageController::class, 'select_package'])->name('web.select_package');

/*
|--------------------------------------------------------------------------
|   # authentication routes
|--------------------------------------------------------------------------
*/

Route::match(['get', 'post'], 'sign-in', [UserController::class, 'sign_in'])->name('sign_in');
Route::match(['get', 'post'], 'sign-up', [UserController::class, 'sign_up'])->name('sign_up');
Route::get('sign-out', [UserController::class, 'sign_out'])->name('sign_out');

/*
|--------------------------------------------------------------------------
|   # customer routes
|--------------------------------------------------------------------------
*/

Route::prefix('app')->middleware('user')->group(function () {
    // subscription routes
    Route::resource('subscription', SubscriptionController::class);

    // profile routes
    Route::get('profile', [UserController::class, 'user_profile'])->name('user_profile');
    Route::post('update-profile', [UserController::class, 'updateProfile'])->name('update_profile');
    Route::post('update-password', [UserController::class, 'updatePassword'])->name('update_password');

    Route::middleware('subscribed-and-paid')->group(function () {
        // dashboard route
        Route::get('/', [CustomerDashboard::class, 'index'])->name('user_dashboard');
        // shop routes
        Route::resource('shops', ShopController::class);
        // customer routes
        Route::resource('customers', CustomerController::class);

        // ticket routes
        Route::resource('tickets', SupportTicketController::class);
        Route::get('inspect-ticket/{id}', [SupportTicketController::class, 'customerInspectTicket'])->name('customer_inspect_ticket');
        Route::post('reply-support-ticket', [SupportTicketController::class, 'customerReplyTicket'])->name('customer_reply_support_ticket');

        // order routes
        Route::controller(OrderController::class)->group(function () {
            Route::get("orders", "index")->name('orders');
            Route::get("update-status/{id}/{status}", "updateStatus")->name('order.update.status');
            Route::get("order-show/{id}", "show")->name('order.show');
        });

        // setting routes
        Route::controller(SettingController::class)->group(function () {
            Route::get("settings/{id}", "settings")->name('settings');
            Route::post('tracking-api', 'createApi')->name('tracking_api');
        });

        // seo tag routes
        Route::post('update-seo-tag', [TemplateSeoTagController::class, 'update'])->name('update_seo_tags');

        // payment method routes
        Route::controller(PaymentMethodController::class)->prefix('payment-method')->group(function () {
            Route::post('update/one-wallet', 'updateOneWallet')->name('update.one.wallet');
            Route::post('update/ssl-commerz', 'updateSslCommerz')->name('update.ssl.commerz');
            Route::post('update/aamar-pay', 'updateAamarPay')->name('update.aamar.pay');
        });

        // wallet routes
        Route::controller(WalletController::class)->prefix('wallet')->group(function () {
            Route::get("my-wallet", "myWallet")->name('my.wallet');
            Route::post('create/one-wallet', 'createOneWallet')->name('create.one.wallet');
            Route::get('transaction-history', 'transactionHistory')->name('wallet.transaction.history');
            Route::match(['get', 'post'], 'withdraw', 'withdraw')->name('wallet.withdraw');
            Route::get('withdraw-history', 'withdrawHistory')->name('wallet.withdraw.history');
            Route::get('withdraw-details/{id}', 'withdrawDetails')->name('wallet.withdraw.show');
        });

        // template routes
        Route::prefix('/templates')->controller(TemplateController::class)->as('templates.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::match(['get', 'post'], '/{id}/select', 'selectTemplate')->name('select');
            Route::get('mine', 'mine')->name('mine');
            Route::get('{id}/edit', 'edit')->name('edit');
            Route::post('slug/availability', 'slugAvailability')->name('slug.availability');
            Route::post('settings/{id}', 'settings')->name('settings');

            // Route to update a section
            Route::post('section/update/{id}', [TemplateSectionController::class, 'updateSection']);

            // Route to get a section by its ID
            Route::get('section/{id}', [TemplateSectionController::class, 'getSection']);

            // Route to update an element within a section by section ID
            Route::post('element/update/{sectionId}', [TemplateSectionController::class, 'updateElement']);
            Route::post('element/save-image', [TemplateSectionController::class, 'saveImage']);

            // Route to get an element by its ID
            Route::get('element/{id}', [TemplateSectionController::class, 'getElement']);

            // Route to create & update feature item
            Route::post('feature/save', [TemplateSectionController::class, 'saveFeature']);

            // Route to delete feature item
            Route::delete('feature/delete/{id}', [TemplateSectionController::class, 'deleteFeature']);

            // Route to create & update review item
            Route::post('review/save', [TemplateSectionController::class, 'saveReview']);

            // Route to delete review item
            Route::delete('review/delete/{id}', [TemplateSectionController::class, 'deleteReview']);

            // Route to update product details
            Route::post('product-details/update', [TemplateSectionController::class, 'updateProductDetails']);

            // ulaunch
            Route::prefix('ulaunch')->group(function () {
                Route::post('update-company-logo', [UlaunchTemplateController::class, 'updateCompanyLogo']);
                Route::post('update-nav-color', [UlaunchTemplateController::class, 'updateNavColor']);
                Route::post('update-menu-area', [UlaunchTemplateController::class, 'updateMenuArea']);
                Route::post('update-hero-area', [UlaunchTemplateController::class, 'updateHeroArea']);
                Route::post('update-steps-area', [UlaunchTemplateController::class, 'updateStepsArea']);
                Route::post('update-features-area', [UlaunchTemplateController::class, 'updateFeaturesArea']);
                Route::post('update-about-area', [UlaunchTemplateController::class, 'updateAboutArea']);
                Route::post('update-testimonials-area', [UlaunchTemplateController::class, 'updateTestimonialsArea']);
                Route::post('update-info-area', [UlaunchTemplateController::class, 'updateInfoArea']);
                Route::post('update-order-area', [UlaunchTemplateController::class, 'updateOrderArea']);
                Route::post('update-footer-area', [UlaunchTemplateController::class, 'updateFooterArea']);
                Route::post('update-product-info', [UlaunchTemplateController::class, 'updateProductInfo']);
            });

            // seedee
            Route::prefix('seedee')->group(function () {
                Route::post('update-product-details', [SeedeeTemplateController::class, 'updateProductDetails']);
                Route::post('update-content-area', [SeedeeTemplateController::class, 'updateContentArea']);
                Route::post('update-hero-image', [SeedeeTemplateController::class, 'updateHeroImage']);
                Route::post('update-feature-image', [SeedeeTemplateController::class, 'updateFeatureImage']);
                Route::post('update-order-image', [SeedeeTemplateController::class, 'updateOrderImage']);
                Route::post('update-feature-and-step', [SeedeeTemplateController::class, 'updateFeatureAndStep']);
                Route::post('delete-feature-or-step', [SeedeeTemplateController::class, 'deleteFeatureOrStep']);
                Route::post('add-feature-or-step', [SeedeeTemplateController::class, 'addFeatureOrStep']);
                Route::post('update-site-logo', [SeedeeTemplateController::class, 'updateSiteLogo']);
            });

            // cycle
            Route::prefix('cycle')->group(function () {
                Route::post('update-company-logo', [CycleTemplateController::class, 'updateCompanyLogo']);
                Route::post('update-nav-color', [CycleTemplateController::class, 'updateNavColor']);
                Route::post('update-menu-area', [CycleTemplateController::class, 'updateMenuArea']);
                Route::post('update-hero-area', [CycleTemplateController::class, 'updateHeroArea']);
                Route::post('update-steps-area', [CycleTemplateController::class, 'updateStepsArea']);
                Route::post('update-features-area', [CycleTemplateController::class, 'updateFeaturesArea']);
                Route::post('update-about-area', [CycleTemplateController::class, 'updateAboutArea']);
                Route::post('update-testimonials-area', [CycleTemplateController::class, 'updateTestimonialsArea']);
                Route::post('update-info-area', [CycleTemplateController::class, 'updateInfoArea']);
                Route::post('update-order-area', [CycleTemplateController::class, 'updateOrderArea']);
                Route::post('update-footer-area', [CycleTemplateController::class, 'updateFooterArea']);
                Route::post('update-product-info', [CycleTemplateController::class, 'updateProductInfo']);
            });
        });

        // dynamic form routes
        Route::prefix('dynamic-form')->group(function () {
            Route::post('add-input-field', [DynamicOrderFormController::class, 'addInputField']);
            Route::post('delete-input-field', [DynamicOrderFormController::class, 'deleteInputField']);
            Route::post('update-input-field', [DynamicOrderFormController::class, 'updateInputField']);
        });

        // ticket routes
        Route::resource('custom-domain', CustomDomainController::class);
    });
});

// subscription routes
Route::resource('/subscription', SubscriptionController::class);
Route::get('/subscription/extend/{id}', [SubscriptionController::class, 'extend'])->name('subscription.extend');


// SSLCOMMERZ Start
Route::prefix('ssl-commerz')->group(function () {
    Route::post('pay', [SslCommerzPaymentController::class, 'index'])->name('ssl-commerz.pay');

    Route::post('success', [SslCommerzPaymentController::class, 'success']);
    Route::post('fail', [SslCommerzPaymentController::class, 'fail']);
    Route::post('cancel', [SslCommerzPaymentController::class, 'cancel']);

    Route::post('ipn', [SslCommerzPaymentController::class, 'ipn']);
});

// aamar pay Start
Route::prefix('aamar-pay')->group(function () {
    Route::post('make-payment', [AamarPayController::class, 'makePayment'])->name('aamar-pay.make-payment');
    Route::post('success', [AamarPayController::class, 'success'])->name('aamar-pay.success');
    Route::post('fail', [AamarPayController::class, 'fail'])->name('aamar-pay.fail');
    Route::get('cancel', [AamarPayController::class, 'cancel'])->name('aamar-pay.cancel');
});

/*
|--------------------------------------------------------------------------
|   # admin routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->middleware('admin')->group(function () {
    // admin dashboard
    Route::get('/', [AdminDashboard::class, 'index'])->name('admin_dashboard');

    // packages
    Route::resource('packages', PackageController::class);

    // ticket routes
    Route::controller(SupportTicketController::class)->group(function () {
        Route::get("support-tickets", "tickets")->name('support_tickets');
        Route::get('delete-support-ticket/{id}', 'delete')->name('delete_support_ticket');
        Route::get('inspect-support-ticket/{id}', 'inspectTicket')->name('inspect_support_ticket');
        Route::post('reply-support-ticket', 'replyTicket')->name('admin_reply_support_ticket');
        Route::get('support-ticket-status/{id}/{status}', 'status')->name('support_ticket_status');
    });

    // ticket routes
    Route::controller(WithdrawalController::class)->prefix('withdrawal')->group(function () {
        Route::get("index", "index")->name('withdrawal.index');
        Route::get('show/{id}', 'show')->name('withdrawal.show');
        Route::match(['get', 'post'], 'approve-reject/{id}', 'approveReject')->name('withdrawal.approve_reject');
    });
});


/*
|--------------------------------------------------------------------------
|   # test routes
|--------------------------------------------------------------------------
*/

Route::get('test', [TestController::class, 'index']);
