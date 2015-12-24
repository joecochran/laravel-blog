@extends('app')

@section('content')
    <h1>Authors</h1>
    @foreach($authors as $author)
    <article>
        <h2>
            <a href="{{ action('AuthorsController@show', $author->id) }}">{{ $author->display_name }}</a>
        </h2>
        <img src="/img/{{ $author->avatar }}" class="img-thumbnail" alt="{{ $author->display_name }}" width="150" height="150"/>
        <p>{!! $author->bio !!}</p>
    </article>
    @endforeach
@stop
