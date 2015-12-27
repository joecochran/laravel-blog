<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PostsController extends Controller
{
    /**
     * Return all posts
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::latest('published_at')->published()->get();

        return view('posts.index', compact('posts'));
    }
    
    /**
     * Show specific post
     *
     * @param integer $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }
    
    /**
     * Show form to create new article
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a new article
     *
     * @param CreatePostRequest $request
     * @return Response
     */
    public function store(Requests\CreatePostRequest $request)
    {
        Post::create($request->all());
        return redirect('/');
    }
}
