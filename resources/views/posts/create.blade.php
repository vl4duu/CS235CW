@extends('layouts.myLayout')
@section('title', 'Create your post now!')
@section("content")
    
    <form method = "POST" action = "{{route('post.store')}}">
        @csrf
        <p>Content: <input type = "text" name = "comment" value = "{{old('comment')}}"></p>
        <input type = "submit" value = "Submit" class="btn btn-success">


@endsection