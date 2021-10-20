<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        //  dd(request(['Category']));
        // return Post::latest()->filter(request(['search', 'Category', 'author']))->paginate(6);
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'Category', 'author']))->paginate(6)->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function createPost()
    {
        return view('page.create-post');
    }

    public function myPosts()
    {
        $myposts = Post::where('user_id', Auth::user()->id)
            ->orderBy('created_at')
            ->get();
        // ddd($myposts);

        return view('page.myblogs', [
            'myposts' => $myposts,
        ]);
    }
}

//?=============================================================

//!practical some tips
// ?public function index()
// ?{
//?     $posts = Post::latest();
//?     if (request('search')) {
//?         $posts->where('title', 'Like', '%' . request('search') . '%')
//?             ->where('body', 'Like', '%' . request('search') . '%');
//?     }

//?     return view('welcome', [
//?         // 'posts' => Post::all(),
// ?        // 'posts'      => Post::latest()->get(),
//?         'posts'      => $posts->get(),
// ?        'categories' => Category::all(),
//     ]);
// ?}

//* public function index()
// *{
//*    // dd($this->getPost());
//*     return view('welcome', [
//*         'posts'      => $this->getPost(),   <
// *        'categories' => Category::all(),    ^
// *    ]);                                    ^
//* }                                         ^
//*                                       ^
//*                                     ^
//* protected function getPost() ^>>>>>>>^
//*     {
//*         //   dd(Post::latest()->filter()->get());
// *        return Post::latest()->filter()->get();

//*     }
//?=============================================================
