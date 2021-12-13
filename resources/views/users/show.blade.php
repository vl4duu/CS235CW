@extends ('layouts.myLayout')
@section('title', 'User Details')

@section('content')

	<ul>
			<li> Name: {{$user -> name}}</li>
			<li> Email: {{$user -> email}}</li>
			<li> Email verified at: {{ $user -> email_verified_at ?? 'Unknown'}}</li>
	</ul>
    <a href ="/users/">Go back :)</a>
@endsection