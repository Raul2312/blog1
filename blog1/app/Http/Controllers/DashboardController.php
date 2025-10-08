<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __constuct(){
        $this->middleware('auth');
    }
    public function index(){
        return view('admin.dashboard');
    }
}
