<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// index
Route::get('/posts', function () {

    $posts = Post::all();
    return view('posts.index',['posts'=>$posts]);
})->name('posts.index');

// create
Route::get('/posts/create', function () {

    return view("posts.create");
})->name('posts.create');

// @todo - agregar campos faltantes a la vista y validaciones
Route::post('/posts/store', function (Request $request) {
    $post = new Post($request->input());
    $post->saveOrFail();
    return redirect()->route("posts.index")->with(["mensaje" => "Post creado"
    ]);
})->name('posts.store');

// edit
Route::get('/posts/{post}/edit', function (Post $post) {
    return view("posts.edit", ["post" => $post]);
})->name('posts.edit');

Route::put('/posts/{post}/update',function(Request $request, Post $post) {
    $post->fill($request->input())->saveOrFail();
    return redirect()->route("posts.index")->with(["mensaje" => "post actualizado"]);
})->name('posts.update');

