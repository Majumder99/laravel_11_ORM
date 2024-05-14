<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "I'm sourav";
});

Route::get("/get", function () {
    return "This is a post request";
});
