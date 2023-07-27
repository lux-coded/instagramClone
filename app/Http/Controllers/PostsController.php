<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function create() {
        return view('posts/create');
    }

    public function show($postId) {
        $post = Post::findOrFail($postId);
        return view('posts/show',[
            'post' => $post,
        ]);
    }

    public function store() {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        $id = auth()->user()->id;

        return redirect("/user/{$id}");

    }
}
