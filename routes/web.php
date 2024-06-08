<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/producto', function () {
    return view('producto');
});
Route::get('/servicio', function () {
    return view('servicio');
});