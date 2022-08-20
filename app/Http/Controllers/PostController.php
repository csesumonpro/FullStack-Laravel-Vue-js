<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.list', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('/posts');
    }

    public function edit($post_id)
    {
        $post = Post::where('id', $post_id)->first();
        return view('posts.update', ['post' => $post]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('/posts');
    }
}