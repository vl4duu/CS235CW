<!DOCTYPE html>
<h1>Users</h1>
<p>
	<ul>
			@foreach ($users as $user)
				<li>{{$user -> name}}</li>
			@endforeach
	</ul>
</p>
