@extends('app')

@section('content')
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <div class="post">{{ $post->body }}</div>
    </article>
@stop
