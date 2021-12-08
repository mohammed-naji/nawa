<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function about()
    {
        return view('blog.about');
    }

    public function contact()
    {
        return view('blog.contact');
    }

    public function contactSubmit(Request $request)
    {
        dd($request->all());
    }

    public function post()
    {
        return view('blog.post');
    }
}
