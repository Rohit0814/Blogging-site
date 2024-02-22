<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogger;

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

    public function login(){
        return view("login");
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

        $blogger = new Blogger();
        $blogger->first_name= $request->first_name;
        $blogger->last_name= $request->last_name;
        $blogger->password = md5($request->password);
        $blogger->username = $request->username;
        $blogger->email = $request->email;
        $blogger->address = $request->address;
        $blogger->country = $request->country;
        $blogger->state = $request->state;
        $blogger->zip = $request->zip;
        $blogger->save();
        return redirect("/login");
    }
}