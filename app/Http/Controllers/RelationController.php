<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Insurance;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function one_to_one()
    {


        // $user = User::find(1);

        // dd($user->insurance);

        $insurance = Insurance::find(1);
        dd($insurance->user);


        return 'dd';
    }


    public function one_to_many()
    {

        // $category = Category::findOrFail(3);

        // dd($category->posts);

        // $post = Post::find(1);

        // dd($post->category);

        // $user = User::where('id', 1)->first();
        // dd($user->posts);

        $post = Post::find(5);

        dd($post->category);

        return 'ee';
    }
}
