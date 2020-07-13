@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary mt-3">Go Back</a>
    <div class="card mt-3 p-4">
        <h1 >
            {{$post->title}}
        </h1>
        <div>
            {{$post->body}}
        </div>
        <small>Written on {{$post->created_at}}</small>
        
    </div>
    
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary mt-3">Edit</a>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right mt-3']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif

@endsection