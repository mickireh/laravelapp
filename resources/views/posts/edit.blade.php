@extends('layouts.app')

@section('content')
    <h1 class="mt-3">Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body',$post->body, ['class' => 'form-control', 'placeholder' => 'Body text'])}}
        </div>
        {{-- Laravel allows here t ochange the method to PUT for update, see route::list, needs PUT/PATCH --}}
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection