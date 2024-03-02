<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\InvokabelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogPostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ExampleController::class,'index']);
Route::get('/about',[ExampleController::class,'about']);

Route::get('/demo',InvokabelController::class);
Route::get('/register',[ExampleController::class,'register']);
Route::get('/login',[ExampleController::class,'login']);
Route::post('/create-user',[ExampleController::class,'saveData']);
Route::post('/create-session',[ExampleController::class,'createSession']);

Route::group(['middleware'=> 'blog', 'prefix'=> '/users'], function () {
    Route::post('/logout',[ExampleController::class,'logout']);
    Route::get('/post',[ExampleController::class,'post']);
    Route::post('/posts',[ExampleController::class,'create_post']);
    Route::post('/profile',[ExampleController::class,'profile']);
    Route::get('/dashboard',[ExampleController::class,'dashboard']);
});

Route::group(['middleware' => 'blog' , 'prefix' => '/posts'], function() {
    Route::post('/delete/{id}',[BlogPostController::class,'delete']);
    Route::get('/trash',[BlogPostController::class,'trash'])->name('posts.trash');
    Route::delete('/forcedelete/{id}',[BlogPostController::class,'forceDelete']);
    Route::post('/restore/{id}',[BlogPostController::class,'restore']);
});

/*Route::post('/posts/delete/{id}',[BlogPostController::class,'delete'])->middleware('blog');
Route::get('/posts/trash',[BlogPostController::class,'trash'])->name('posts.trash')->middleware('blog');
Route::delete('/posts/forcedelete/{id}',[BlogPostController::class,'forceDelete'])->middleware('blog');
Route::post('/posts/restore/{id}',[BlogPostController::class,'restore'])->middleware('blog');*/

Route::get('/demo/{name}/{id?}',function($name, $id=null){
    $data = compact('name','id');
    return view('demo')->with($data);
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
