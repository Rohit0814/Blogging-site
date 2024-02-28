<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    public function post(){
        return view("blog-post");
    }

    public function create_post(Request $request){
        $title = $request->title;
        $content = $request->content;

        $request->validate([
            'title'=> 'required',
            'content' => 'required',   
        ]);

        $user = Auth::guard("blogger")->user()->blogger_id;
        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->blog_id = $user;

        $post->save();
        return redirect("/users/dashboard");
    }

    public function trash(){
        return view("trash");
    }

    public function delete($id){
        $post = Post::find($id);
        if(!is_null($post)){
            $post->delete();
        }
        return redirect("/users/dashboard");
    }
}
