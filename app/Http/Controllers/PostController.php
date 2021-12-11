<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        // return view('posts.index', compact('posts'));
        return view('posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required|max:500',
            'image' => 'required|image|mimes:png,jpg',
            // 'phone' => 'max:10|min:5',
            // 'price' => 'regex:09'
        ]);

        // dd($request->except('_token'));

        $imgname = time() . rand() . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $imgname);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imgname
        ]);

        return redirect()->route('posts.index')->with('msg', 'Post added successfully')->with('type', 'success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'fdsaafjkhsfkdsgjsgafjah';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        // if(!$post) {
        //     abort(404);
        // }

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required|max:500',
            'image' => 'nullable|image|mimes:png,jpg'
        ]);

        $post = Post::findOrFail($id);
        $imgname = $post->image;

        if($request->hasFile('image')) {
            $imgname = time() . rand() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $imgname);
        }

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imgname
        ]);

        return redirect()->route('posts.index')->with('msg', 'Post updated successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index')->with('msg', 'Post deleted successfully')->with('type', 'danger');
    }
}
