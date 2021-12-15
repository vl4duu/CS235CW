@extends('layouts.myLayout')

@section('title', 'View Post')

@section('content')
    <div class="card">
  <div class="card-header">
    by {{$post->user->name}}
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>{{$post->message}}</p>
      <footer class="blockquote-footer">{{$post->created_at}} <cite title="Source Title"></cite></footer>
    </blockquote>
  </div>
</div>
Comments
@foreach($comments as $comment)
    <div class="list-group">
  <a href="users/{{$comment->user->id}}" class="list-group-item list-group-item-action flex-column align-items-start active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{$comment->user->name}}</h5>
      <small>{{$comment->created_at}}</small>
    </div>
    <p class="mb-1">{{$comment->message}}</p>
    <small>Donec id elit non mi porta.</small>
  </a>
    
@endforeach


@endsection