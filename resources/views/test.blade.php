
	@endforeach
	@if(isset($birthdates)
	  @foreach ($birthdates as $birthdate) 
		{{ $birthdate }} <br>
	  @endforeach
	@endif
        @if(isset($emails )
	  @foreach ($emails as $email)
	        {{ $email }}<br>
	  @endforeach
	 @endif
	 @if(isset($bios)
	  @foreach ($bios as $bio)
		{{ #bio }}<br>
	  @endforeach
	 @endif
	}
