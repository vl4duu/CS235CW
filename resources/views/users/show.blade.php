@extends ('layouts.myLayout')
@section('title', 'User Details')

@section('content')

	<ul>
			<li> Name: {{$user -> name}}</li>
			<li> Email: {{$user -> email}}</li>
			<li> Email verified at: {{ $user -> email_verified_at ?? 'Unknown'}}</li>
	</ul>
	<div>
		<a class="btn btn-primary" href ="/users/" role="button">Go back!</a>
	</div>
@endsection