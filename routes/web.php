<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;


Route::resource('siswas', SiswaController::class);
Route::get('/', function () {
    return view('welcome');
});
