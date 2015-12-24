@extends('app')

@section('content')
    @foreach($posts as $post)
    <article>
        <h2>
            <a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a>
        </h2>
        <div class="post">{!! $post->body !!}</div>
    </article>
    @endforeach
@stop
