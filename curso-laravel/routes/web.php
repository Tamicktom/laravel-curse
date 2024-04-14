<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
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

Route::redirect("/sobre", "/empresa");


// Route::get("/empresa", function () {
//     return view("empresa");
// });

Route::view("/empresa", "empresa");


Route::get("/news", function () {
    return view("news");
})->name("Noticias");

Route::get("/novidades", function () {
    return redirect()->route("Noticias");
});

Route::prefix("/admin")->group(function () {
    Route::get("/users", function () {
        return "Admin Users";
    });

    Route::get("/settings", function () {
        return "Admin Settings";
    });
});
