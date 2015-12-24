@extends('app')

@section('content')
    <h1>Blog</h1>
    @foreach($posts as $post)
    <article>
        <header>
            <h2>
                <a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a>
            </h2>
            <p><small><time datetime="{{ $post->created_at }}">{{ date('F j, Y', strtotime($post->created_at)) }}</time></small></p>
        </header>
        <main>
            <div class="post">{!! $post->body !!}</div>
        </main>
    </article>
    @endforeach
@stop
