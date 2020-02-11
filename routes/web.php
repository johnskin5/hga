<?php

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
    return view('pages.index');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('choir', function () {
    return view('pages.choir');
});

Route::get('contact', function () {
    return view('pages.contact');
});

Route::get('departments', function () {
    return view('pages.departments');
});

Route::get('media', function () {
    return view('pages.media');
});

Route::get('pastors', function () {
    return view('pages.pastors');
});

Route::get('protocol', function () {
    return view('pages.protocol');
});

Route::get('services', function () {
    return view('pages.services');
});

Route::get('apostle', function () {
    return view('pages.apostle');
});

Route::get('1', function () {
    return view('messages.1');
});

Route::get('2', function () {
    return view('messages.2');
});

Route::get('3', function () {
    return view('messages.3');
});

Route::get('4', function () {
    return view('messages.4');
});

Route::get('5', function () {
    return view('messages.5');
});

Route::get('6', function () {
    return view('messages.6');
});

Route::get('7', function () {
    return view('messages.7');
});

Route::get('messages', function () {
    return view('pages.messages');
});