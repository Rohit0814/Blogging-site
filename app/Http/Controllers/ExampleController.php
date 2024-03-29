<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Blogger;

class ExampleController extends Controller
{
    public function index(){
        $post = Post::all();
        $data = compact("post");
        return view("welcome")->with($data);
    }

    public function about(){
        return view("about");
    }

    public function dashboard(){
        //dd(Auth::guard('blogger')->check());
        $post = Post::all()->where("blog_id", '=' ,Auth::guard('blogger')->user()->blogger_id);
        $data = compact("post");
        //dd($data);
        return view("dashboard")->with($data);
    }

    public function register(){
        if(Auth::guard('blogger')->check()){
            return redirect('/users/dashboard');
        }
        return view("register");
    }

    public function login(){
        if(Auth::guard('blogger')->check()){
            return redirect('/users/dashboard');
        }
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
        $blogger->password = bcrypt($request->password);
        $blogger->username = $request->username;
        $blogger->email = $request->email;
        $blogger->address = $request->address;
        $blogger->country = $request->country;
        $blogger->state = $request->state;
        $blogger->zip = $request->zip;
        $blogger->save();
        return redirect("/login");
    }


    public function createSession(Request $request){
        $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
        if(Auth::guard('blogger')->attempt($credentials)){
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    public function logout(){
        //dd(Auth::guard('blogger'));
        Auth::guard('blogger')->logout();
        return redirect('/');
    }

    public function profile(){
        return view('profile');
    }

}



