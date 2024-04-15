<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function blogDetails(){
        return view('frontEnd.blog.blog-details');
    }
    public function aboutDetails(){
        return view('frontEnd.about.about');
    }
}
