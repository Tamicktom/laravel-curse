<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get("/produto/{id}", function (Request $request, $id) {
    return "Produto: {$id}";
});
