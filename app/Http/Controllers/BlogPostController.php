<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function post(){
        return view("blog-post");
    }
}
