@extends('app')

@section('content')
    <h1>Create new post</h1>
    {!! Form::open(['action' => 'PostsController@store']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::input('date', 'published_at', date('Y-m-d')) !!}
        </div>
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop
