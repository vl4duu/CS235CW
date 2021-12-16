@extends('layouts.myLayout')

@section('title', 'View Post')

@section('content')
    <div class="card">
  <div class="card-header">
    <h4>by {{$post->user->name}}</h4>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p style = 'color:gray'>{{$post->message}}</p>
      <footer class="footer">{{$post->created_at}} <cite title="Source Title"></cite></footer>
    </blockquote>
  </div>
</div>


<p>Comment on this post!<p>
<div id = "root">
    Comment: <input type ='text' id = 'input' v-model='newComment'>
    <button @click="createComment">Create</button>
    <h3>Comments</h3>
    <div v-for = "el in comments">
      <div v-if="el.post_id == '{{$post->id}}'">
        <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
        <div>
          <p class="mb-1" style = 'color:tomato'>@{{el.name}}</p>
        </div>
        <p class="mb-1">@{{el.content}}</p>
        <small class="text-muted">@{{el.created_at}}</small>
        </a>
      </div>
    </div>
    
    
    
  </div>
    
</div>


<script>
  app = new Vue({
    el:"#root",
    data:{
      comments:[],
      newComment:"",
    },
    methods:{
      createComment: function(){
        axios.post('{{route("api.comments.store")}}',
        {
          content:this.newComment,
          postId:'{{$post->id}}',
          userId: '{{Auth::user()->id}}'
        })
        .then(response=>{
          this.comments.push(response.data)
          this.newComment = ''
        })
        .catch(response=>{
          console.log(response)
        })
      }
    },
    mounted(){

      axios.get("{{route('api.comments.index') }}")
      .then(response =>{
        this.comments = response.data;
      })
      .catch(response =>{
        console.log(response)
      })
    }
  })
</script>


@endsection