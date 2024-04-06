<?php

use App\Http\Controllers\Api\ImageController as ApiImageController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource("images", ImageController::class)
    ->only(["index", "create", "store"]);
Route::resource("api/images", ApiImageController::class)
    ->only(["show"]);
