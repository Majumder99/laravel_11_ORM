<?php

use App\Http\Controllers\MyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post("/post", function () {
    return "This is a post man";
});


Route::post("/check/{id}", function ($id) {
    return $id;
});

Route::get("/controller", [MyController::class, "next"]);
Route::get("/controller/{id}", [MyController::class, "prev"]);
Route::get("/first", [MyController::class, "first"]);
Route::get("/catch", [MyController::class, "catch"]);
