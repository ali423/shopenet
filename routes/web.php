<?php


use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\RegisterController as AdminRegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\FactorController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SiteMapController;
use App\Http\Controllers\TemplateCategoryController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UserController;
use App\Models\Factor;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [LandingController::class, 'index'])->name('home');

Route::get('/templates/list', [TemplateController::class, 'list'])->name('template.list');

Route::resource('template', TemplateController::class)->only('show');

Route::get('factor/payment-callback', [PaymentController::class, 'paymentCallBack'])->name('payment.callback');

Route::get('/template-custom', [TemplateController::class, 'customTemplate'])->name('template.custom');

Route::post('/template-custom', [TemplateController::class, 'orderTemplate'])->name('order.template');

Route::resource('plan', PlanController::class)->only('index');

Route::get('/contactus', [LandingController::class, 'contactus'])->name('contactus');

Route::get('/select-template/{template:id}', [OrderController::class, 'selectTemplate'])->name('select.template');

Route::get('/select-plan', [OrderController::class, 'selectPlan'])->name('select.plan');

Route::get('/select-free-plan', [OrderController::class, 'selectFreePlan'])->name('select.free_plan');

Route::get('/sitemap.xml', [SiteMapController::class, 'index']);


Route::middleware('user.auth')->group(function () {

    Route::get('/logout', [LoginController::class, 'logout'])->name('user.logout');

    Route::middleware(['awaiting_payment', 'available_service'])->group(function () {

        Route::get('/order/confirm', [OrderController::class, 'orderConfirm'])->name('order.confirm');

        Route::post('/order/confirm', [OrderController::class, 'orderConfirmStore'])->name('order.confirm.store');

    });
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('profile', [ProfileController::class, 'show'])->name('profile');

    Route::get('/order/delete', [OrderController::class, 'destroy'])->name('order.delete');

    Route::post('factor/pay/{factor:id}', [FactorController::class, 'pay'])->name('factor.pay');

    Route::post('factor/cancel/{factor:id}', [FactorController::class, 'cancel'])->name('factor.cancel');


    Route::resource('factor', FactorController::class);

    Route::resource('service', ServiceController::class);

    Route::resource('user', UserController::class);

    Route::get('/service/extension/{service:id}', [OrderController::class, 'extension'])->name('service.extension');

    Route::get('payment/success/{factor:id}', [PaymentController::class, 'success'])->name('payment.success');

    Route::get('payment/free_success/', [PaymentController::class, 'freePlanSuccess'])->name('free.success');


    Route::get('payment/reject/{factor:id}', [PaymentController::class, 'reject'])->name('payment.reject');

    Route::post('/check-discount', [\App\Http\Controllers\DiscountController::class, 'checkDiscount']);

});

Route::middleware('user_guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('user.login');
    Route::post('/login', [LoginController::class, 'login'])->name('user.login.store');
    Route::get('/verification', [LoginController::class, 'verification'])->name('user.verification');
    Route::post('/verification', [LoginController::class, 'verificationStore'])->name('user.verification.store');
    Route::post('/verification-resend', [LoginController::class, 'reSend'])->name('re-send');
    Route::get('/login/name', [LoginController::class, 'name'])->name('user.login.name');
    Route::post('/login/name', [LoginController::class, 'completeProfile'])->name('user.login.name.store');
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AdminRegisterController::class, 'create']);
        Route::post('/login', [AdminRegisterController::class, 'login'])->name('login');
    });
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/linkstorage', function () {
            Artisan::call('storage:link');
        });
        Route::get('/logout', [AdminRegisterController::class, 'destroy'])->name('logout');
        Route::resource('plan', PlanController::class);
        Route::prefix('dashboard')->group(function () {
            Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
            Route::resource('template', TemplateController::class);
            Route::resource('template-category', TemplateCategoryController::class);
            Route::resource('discount', DiscountController::class);
            Route::resource('service', \App\Http\Controllers\Admin\ServiceController::class);
        });
    });

});

