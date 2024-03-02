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
        $posts = Post::onlyTrashed()->where("blog_id", '=' ,Auth::guard('blogger')->user()->blogger_id)->get();
        $data = compact("posts");
        return view("trash")->with($data);
    }


    public function forceDelete($id){
        $post = Post::withTrashed()->find($id);
        if(!is_null($post)){
            $post->forceDelete();
        }
        return redirect()->route("posts.trash");
    }


    public function delete($id){
        $post = Post::find($id);
        if(!is_null($post)){
            $post->delete();
        }
        return redirect("/users/dashboard");
    }

    public function restore($id){
        $post = Post::onlyTrashed()->find($id);
        if(!is_null($post)){
            $post->restore();
        }
        return redirect()->route("posts.trash");
    }

    public function updateView($id){
        $post = Post::all()->where('post_id','=', $id);
        $data = compact("post");
        return view("update")->with($data);
    }

    public function updateData($id, Request $request){
        $post = Post::find($id);
        if(!is_null($post)){
            $post->title = $request->update_title;
            $post->content = $request->update_content;
            $post->save();
        }
        return redirect()->route("users.dashboard");
    }
}
