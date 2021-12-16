@extends('layouts.myLayout')

@section('title','Post Feed')

@section('content')
    <body>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <a class="btn btn-success" href="/create/post/" role="button">Create a post</a>
        <p></p>
        @foreach($posts as $post)
            <div class="card" style="width: 18rem;" id='root'>
                <div class="card-body">
                    <h5 class="card-title">by {{$post->user->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$post->created_at}}</h6>
                    <p class="card-text">{{$post->message}}</p>
                    <a class="btn btn-primary" href="/post/details/{{$post->id}}/" role="button">Post Details</a>
                </div>
            </div>
        @endforeach
    </body>
<style>
.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}
</style>
@endsection