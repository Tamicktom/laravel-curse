<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/empresa", function () {
    return view("empresa");
});

Route::any("/any", function () {
    return "Any";
});

Route::match(["get", "post"], "/match", function () {
    return "Match";
});
