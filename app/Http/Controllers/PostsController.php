<?php

namespace App\Http\Controllers;

use Request;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest('published_at')->published()->get();

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        dd($post);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        Post::create(Request::all());
        return redirect('/');
    }
}
