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
Route::get('/users/dashboard',[ExampleController::class,'dashboard'])->middleware('blog');

Route::post('/create-session',[ExampleController::class,'createSession']);
Route::post('/users/logout',[ExampleController::class,'logout']);
Route::get('/users/post',[BlogPostController::class,'post']);
Route::post('/users/posts',[BlogPostController::class,'create_post']);
Route::get('/users/profile',[ExampleController::class,'profile']);

Route::post('/posts/delete/{id}',[BlogPostController::class,'delete']);
Route::get('/posts/trash',[BlogPostController::class,'trash']);

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
