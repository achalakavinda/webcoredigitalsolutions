<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});



Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/services', function () 
{
    return view('service');
});

Route::post('/lead/stay-up', [LeadController::class, 'storeStayUpPop'])->name('lead.stayUpPopup');

Route::post('/lead/homepage', [LeadController::class, 'storeHomePageGetStarteted'])->name('lead.homepage');