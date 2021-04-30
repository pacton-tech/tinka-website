<?php

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

Route::get('billplz/response', 'PaymentController@response_billplz')->name('payment-response');
Route::post('billplz/callback', 'PaymentController@callback_billplz')->name('payment-callback');

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/tinkaleadership', function () {
    return view('tinkaleadership');
});
Route::get('/tinkaeducentre', function () {
    return view('tinkaeducentre');
});
Route::get('/tinkaapp', function () {
    return view('tinkaapp');
});

Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/contact', 'ContactController@contactPost')->name('contactPost');

Route::get('/aqliah', function () {
    return view('aqliah');
});
Route::get('/dato', function () {
    return view('dato');
});
Route::get('/faisal', function () {
    return view('faisal');
});
Route::get('/soheil', function () {
    return view('soheil');
});
Route::get('/emeritus', function () {
    return view('emeritus');
});
Route::get('/rozhan', function () {
    return view('rozhan');
});
Route::get('/faq', function() {
    return view('faq');
});
Route::get('/teachers', function() {
    return view('teachers');
});

Route::get('profile', function(){
    return view('profile');
});

Route::get('terms-and-conditions', function(){
    return view('terms-and-conditions');
});

Route::get('privacy-policy', function(){
    return view('privacy-policy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile/{id}', 'ProfileController@profile')->name('view-profile');
    Route::get('/profile/change-password/{id}', 'ProfileController@change_password')->name('change-password');
    Route::post('/profile/reset-password', 'ProfileController@reset_password')->name('reset-password');
    Route::get('/profile/create-profile/{id}', 'ProfileController@create_profile')->name('create-profile');
    Route::get('/dashboard', function () {
        return view('index');
    });
    Route::get('subscription/renew/{id}', 'SubscriptionController@renew')->name('renew-subscription');
    Route::get('subscription/cancel/{id}', 'SubscriptionController@cancel')->name('cancel-subscription');
    Route::get('subscription/upgrade/{id}', 'SubscriptionController@upgrade')->name('upgrade-subscription');
    Route::post('/payment/renew', 'PaymentController@renew')->name('renew-payment');
    Route::get('payment/receipt/{id}', 'PaymentController@receipt')->name('receipt-payment');
});

Route::get('/register/teacher', 'TeacherController@create')->name('register-teacher');
Route::get('/register/student', 'StudentController@create')->name('register-student');

Route::post('/create/teacher', 'TeacherController@store')->name('create-teacher');
Route::post('/create/student', 'StudentController@store')->name('create-student');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('faqs', FaqController::class);
Route::resource('subscription', SubscriptionController::class);
Route::get('subscription/book', 'SubscriptionController@store')->name('create-subscription');
Route::resource('plan', PlanController::class);
Route::post('plan/checkout', 'PlanController@checkout')->name('plan-checkout');

Route::resource('faqs', FaqController::class);
Route::resource('faqcategories', CategoryController::class);
Route::resource('faqsubcategories', SubcategoryController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('payment', PaymentController::class);

Route::get('fees/educentre', 'PlanController@educentre')->name('fee.educentre');
Route::get('fees/home-tuition', 'PlanController@home_tuition')->name('fee.home-tuition');
Route::get('fees/home-tuition/{id}', 'PlanController@home_tuition_show')->name('fee.home-tuition.show');
Route::get('fees/app', 'PlanController@app')->name('fee.app');

// Admin route goes here
Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){

    //Login Routes
    Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login','Auth\LoginController@login');
    Route::post('/logout','Auth\LoginController@logout')->name('logout');

    //Forgot Password Routes
    Route::get('/password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

    //Reset Password Routes
    Route::get('/password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset','Auth\ResetPasswordController@reset')->name('password.update');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard','HomeController@index')->name('home');
        Route::resource('/subscription', SubscriptionController::class);
        Route::resource('/payment', PaymentController::class);
        Route::resource('/users', UserController::class);
    });

});