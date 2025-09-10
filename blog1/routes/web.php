<?php

use Illuminate\Support\Facades\Route;
//endpoint
Route::get('/', function () {
    return view('welcome');
});
Route::get("/contacto", function(){
  return view('contacto');
});

Route::get("/about", function(){
  return view('about');
});

Route::get("/index", function(){
  return view('index');
});

Route::get("/post", function(){
  return view('post');
});

Route::get("/dashboard", function(){
  return view('admin.dashboard');
});
