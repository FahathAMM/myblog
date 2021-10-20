<?php

namespace App\Http\Controllers;

class PageController extends Controller
{

    public function myBlogs()
    {
        return view('page.myblogs');
    }
}
