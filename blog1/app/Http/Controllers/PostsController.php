<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
     public function __constuct(){
        $this->middleware('auth');
    }
    public function index(){
        return view('admin.posts');
    }
    public function showAdd(){
        return view('admin.post_add');
    }
}
