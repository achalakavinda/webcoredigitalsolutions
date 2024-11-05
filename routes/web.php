<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/faq', function () 
{
    return view('faq');
});