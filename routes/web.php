<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/hola/{nombre}', function ($nombre) {
    return "Hola $nombre";
});
