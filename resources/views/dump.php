
	@foreach($users as $user)
	  {{ $user['name'] }} {{ $user['birthdate'] or '' }} {{ $user['email'] or '' }} {{ $user['bio'] or '' }} <br>
	@endforeach
	@else
