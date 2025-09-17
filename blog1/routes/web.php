<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::group(['prefix'=>'dashboard'],function(){
  Route::get("/",function(){
  return view('admin.dashboard');
  });

  Route::get("/users",[UsersController::class,'getUsers']);
 
});

 



