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

    public function saveData(Request $request){
        $request->validate(
            [
                'first_name' => 'required',
                'last_name'=> 'required',
                'password'=>'required',
                'confirm_password' => 'required|same:password',
                'username' => 'required',
                'address' => 'required',
                'zip'=>'required',
                'email'=>'required|email',
            ]
        );
        return view("welcome");
    }
}