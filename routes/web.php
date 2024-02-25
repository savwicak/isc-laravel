<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ContactUsFormController;
use Illuminate\Support\Facades\Mail;

/*
|---------------------------------------------s-----------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front-end.layouts.master');
});

Route::get('/contact', function (){
    return view('front-end.contact');
});

Route::post('/contact', function (){
    $data = request(['name','email','subject','message']);

    \Illuminate\Support\Facades\Mail::to('iscjuniorhs@gmail.com')
        ->send(new \App\Mail\ContactMe($data));
    
        return redirect('/flash')->with('success', 'Message sent successfully!');
});

Route::get('/member', function (){
    return view('front-end.member');
});

Route::get('/portfolio-details', function (){
    return view('front-end.details');
});

Route::get('/flash', function (){
    return view('front-end.flash');
});