<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Author;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthorsController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return view('authors.index', compact('authors'));
    }

    public function show($id)
    {
        $author = Author::findOrFail($id);

        return view('authors.show', compact('author'));
    }
}
