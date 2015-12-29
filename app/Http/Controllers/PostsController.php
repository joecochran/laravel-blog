<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

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
    public function store(PostRequest $request)
    {
        $post = new Post($request->all());
        \Auth::user()->posts()->save($post);
        return redirect('/');
    }

    /**
     * Edit an existing article
     * 
     * @param integer $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update an existing post
     *
     * @param integer $id
     * @param PostRequest $request
     * @return Response
     */
    public function update($id, PostRequest $request)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect('posts');
    }
}
