<?php

use Illuminate\Support\Facades\Route;

//http://localhost:8000
//http://127.0.0.1:8000
Route::get('/', function () {
    return view('welcome');
});

Route::get('saludo', function(){
    return "<font color=red size=10px> hello world!!! </font>";
}) ->name('saludo');

