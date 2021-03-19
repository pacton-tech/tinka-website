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
Route::get('/tuitionfees', function () {
    return view('tuitionfees');
});
Route::get('/registrationteacher', function () {
    return view('registrationteacher');
});
Route::get('/registrationstudent', function () {
    return view('registrationstudent');
});
Route::get('/contact', function () {
    return view('contact');
});
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
