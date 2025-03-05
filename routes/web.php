<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth','verified'])->group(function(){
    Route::view('dashboard','dashboard')->name('dashboard');
    Route::view('profile/edit','profile.edit')->name('profile.edit');
    Route::view('profile/password','profile.password')->name('profile.password');
});
