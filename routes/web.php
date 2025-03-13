<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth','verified'])->group(function(){
    Route::get('dashboard',[Home::class,'dashboard'])->name('dashboard');
    Route::get('account',[Home::class,'account'])->name('account');

    //functions
    Route::view('profile/edit','profile.edit')->name('profile.edit');
    Route::view('profile/password','profile.password')->name('profile.password');
});
