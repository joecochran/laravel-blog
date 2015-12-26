@extends('app')

@section('content')
    <h1>Blog</h1>
    @foreach($posts as $post)
    <article>
        <header>
            <h2>
                <a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a>
            </h2>
            <p><small><time datetime="{{ $post->published_at }}">{{ $post->published_at->diffForHumans() }}</time></small></p>
        </header>
        <main>
            <div class="post">{!! $post->body !!}</div>
        </main>
    </article>
    @endforeach
@stop
