@extends('layouts.myLayout')
@section('title')
	Users
@endsection
@section('content')
	<p>This is the users content list!</p>
	<div style="color:Tomato;">
		<ul class="list-group">
		@foreach($users as $user)
			<li class="list-group-item list-group-item-action"><a href="{{route('users.show' , [ 'id' => $user->id]) }}">{{$user -> name}}</a></li>
		@endforeach
		<a class="btn btn-primary" href ={{route('create.user')}} role="button">Create User</a>
		</ul>
	</div>
	
@endsection