@extends('app')

@section('content')
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <p><small><time datetime="{{ $post->published_at }}">{{ $post->published_at->diffForHumans() }}</time></small></p>
        <div class="post">{!! $post->body !!}</div>
    </article>
@stop
