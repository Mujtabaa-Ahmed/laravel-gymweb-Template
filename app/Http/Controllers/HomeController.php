<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function pricing(){
        return view('pricing');
    }
    public function gallery(){
        return view('gallery');
    }
    public function elements(){
        return view('elemetns');
    }
    public function courses(){
        return view('courses');
    }
    public function contact(){
        return view('contact');
    }
    public function blog(){
        return view('blog');
    }
    public function blog_d(){
        return view('blog_details');
    }
    public function about(){
        return view('about');
    }
}
