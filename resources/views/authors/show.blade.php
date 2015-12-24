@extends('app')

@section('content')
    <article>
        <h1>
            {{ $author->display_name }}
        </h1>
        <img src="/img/{{ $author->avatar }}"  alt="{{ $author->display_name }}" width="150" height="150"/>
        <p>{!! $author->bio !!}</p>
    </article>
@stop
