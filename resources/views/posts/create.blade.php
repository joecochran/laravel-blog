@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create new post</h1>
    <hr>
    @include('errors.list')
    {!! Form::open(['action' => 'PostsController@store']) !!}
        @include('posts._form', ['submitButtonText' => 'Create Post'])
    {!! Form::close() !!}
</div>
@stop
