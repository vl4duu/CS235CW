@extends('layouts.myLayout')
@section('title')
	Users
@endsection
@section('content')
	<p>This is the users content list!</p>
	<ul>
	@foreach($users as $user)
		<li><a href ="{{route('users.show' , [ 'id' => $user->id]) }}">{{$user -> name}}</a> </li>
	@endforeach
	</ul>
	<a href={{route('create.user')}}>Create User</a>
@endsection