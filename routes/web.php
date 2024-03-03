<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\InvokabelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogPostController;
use Illuminate\Support\Facades\Route;


Route::get('/',[ExampleController::class,'index']);
Route::get('/about',[ExampleController::class,'about']);

Route::get('/demo',InvokabelController::class);
Route::get('/register',[ExampleController::class,'register']);
Route::get('/login',[ExampleController::class,'login']);
Route::post('/create-user',[ExampleController::class,'saveData']);
Route::post('/create-session',[ExampleController::class,'createSession']);

Route::group(['middleware'=> 'blog', 'prefix'=> '/users'], function () {
    Route::post('/logout',[ExampleController::class,'logout']);
    Route::get('/post',[BlogPostController::class,'post']);
    Route::post('/posts',[BlogPostController::class,'create_post']);
    Route::get('/profile',[ExampleController::class,'profile']);
    Route::get('/dashboard',[ExampleController::class,'dashboard'])->name('users.dashboard');
});

Route::group(['middleware' => 'blog' , 'prefix' => '/posts'], function() {
    Route::post('/delete/{id}',[BlogPostController::class,'delete']);
    Route::get('/trash',[BlogPostController::class,'trash'])->name('posts.trash');
    Route::delete('/forcedelete/{id}',[BlogPostController::class,'forceDelete']);
    Route::post('/restore/{id}',[BlogPostController::class,'restore']);
    Route::get('/update/{id}',[BlogPostController::class,'updateView']);
    Route::post('/update/{id}',[BlogPostController::class,'updateData']);
    Route::get('/content/{id}',[BlogPostController::class,'post_view']);
    //Route::get('/blogging/{id}',[BlogPostController::class,'data_show']);
});


Route::get('/demo/{name}/{id?}',function($name, $id=null){
    $data = compact('name','id');
    return view('demo')->with($data);
});

