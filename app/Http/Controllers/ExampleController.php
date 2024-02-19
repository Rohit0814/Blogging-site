<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index(){
        return view("welcome");
    }

    public function about(){
        return view("about");
    }

    public function register(){
        return view("register");
    }

    public function saveData(){
        return view("welcome");
    }
}
