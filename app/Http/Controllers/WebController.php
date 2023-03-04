<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        return view("home");
    }


    public function about(){
        return view("user.about");
    }

    public function blog(){
        return view("user.blog");
    }

    public function blogSingle(){
        return view("user.blog-single");
    }

    public function contact(){
        return view("user.contact");
    }

    public function teacher(){
        return view("user.teachers");
    }

    public function courseGrid(){
        return view("user.course-grid");
    }

    public function index(){
        return view("welcome");
    }

    public function class(){
        return view("admin.class.class");
    }

}
