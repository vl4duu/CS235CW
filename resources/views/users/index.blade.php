@extends('layouts.myLayout')
@section('title')
	Users
@endsection
@section('content')
	<p>This is the users content list!</p>
	<ul>
	@foreach($users as $user)
		<li> {{$user -> name}} </li>
	@endforeach
	</ul>
@endsection