<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::post('/message', 'App\Http\Controllers\MessageController@Save');

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact-us');

Route::get('/services', function () 
{
    return view('service');
});

Route::get('/faq', function () 
{
    return view('faq');
});

Route::post('lead',[LeadController::class,'store']);