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
@endsection