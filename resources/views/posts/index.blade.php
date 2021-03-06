@extends('layouts.app')

@section('content')
    <h1 class="mt-3">Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mt-3 p-4">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection