<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('single/{post:slug}', [PostController::class, 'show']); // Post::where('slug',$post)-first()orfirstorfail();

route::get('register', [RegisterController::class, 'create'])->middleware('guest');

route::post('register', [RegisterController::class, 'store'])->middleware('guest');

route::get('login', [SessionController::class, 'create'])->name('login')->middleware('guest');

route::post('login', [SessionController::class, 'store'])->middleware('guest');

route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');

// route::get('myblogs', [PageController::class, 'myBlogs'])->middleware('auth');

route::get('myblogs', [PostController::class, 'myPosts'])->middleware('auth');

// Route::get('Categories/{Category:slug}', function (Category $Category) { // Category::where('slug',$Category)-first()orfirstorfail();
//      ddd($Category);
//     return view('welcome', [
//         'posts'           => $Category->posts,
//         'currentcategory' => $Category,
//         'categories'      => Category::all(),
//     ]);
// });

// Route::get('authors/{author:username}', function (User $author) { // User::where('id',$author)-first()orfirstorfail();
//     // ddd($author->posts);
//     return view('welcome', [
//         'posts' => $author->posts,
//     ]);
// });

//?=============================================================

//!practical some tips

// Route::get('/single/{id}', function ($id) {
//     return view('single', [
//         'post' => Post::find($id),
//     ]);
// });

// Route::get('single/{post}', function (Post $post) {
//     //    ddd($post);
//         return view('single', [
//             'post' =>$post,
//         ]);
//     });

// Route::get('Categories/{Category:slug}', function (Category $Category) {   // Category::where('id',$Category)-first()orfirstorfail();
//     //ddd($Category->posts->id);
//     return view('welcome', [
//         'posts' => $Category->posts->load(['category','author']),
//     ]);

// });

//?=============================================================
