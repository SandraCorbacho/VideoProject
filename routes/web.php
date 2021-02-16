<?php
use App\Http\Controllers\WelcomeController;


Auth::routes();

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('home');

Route::get('login',function(){
    return view('auth.login');
});
