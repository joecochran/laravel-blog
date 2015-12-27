@extends('app')

@section('content')
    <h1>Edit: {{ $post->title }}</h1>
    <hr>
    @include('errors.list')
    {!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostsController@update', $post->id]]) !!}
        @include('posts._form', ['submitButtonText' => 'Update Post'])
    {!! Form::close() !!}
@stop
