<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    $list = User::get();
    dd($list);
    return view('welcome');
});
// Route::get("/",[Controller::class,"loadWelcome"]);
//Route::get('/', [Controller::class, 'loadWelcome'])->name('user_new_form');

