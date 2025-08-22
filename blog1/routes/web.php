<?php

use Illuminate\Support\Facades\Route;
//endpoint
Route::get('/', function () {
    return view('welcome');
});
Route::get("/contacto", function(){
  return view('contacto');
});
