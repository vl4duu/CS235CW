@extends('layouts.myLayout')

@section('title','Post Feed')
@section('content')

    <a class="btn btn-outline-success" href="{{route('post.create')}}" role="button">Post something!</a><br>
    <div class = "center">
    
    @foreach($posts as $post)
    
    <div class="card" style="width: 18rem;">
        <div class="card-body" style = 'background-color: #1f1e1c';>
            <h5 class="card-title">by {{$post->user->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$post->created_at}}</h6>
            <p class="card-text">{{$post->message}}</p>
            <form method = "POST" action = "{{route('comment.store')}}">
                @csrf
                <p>Comment: <input type = "text" name = "content" value = "{{old('content')}}"></p>
                <input type = "submit" value = "Submit" class="btn btn-success"><br><br>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>  
         
    @endforeach
    </div> 
@endsection