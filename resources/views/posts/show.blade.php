@extends('app')

@section('content')
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <time datetime="{{ $post->created_at }}">{{ date('F j, Y', strtotime($post->created_at)) }}</time>
        <div class="post">{!! $post->body !!}</div>
    </article>
@stop
