@extends('layouts.app')

@section('content')



	<ul>
		@foreach ($user as $user)
			<li>
				{{ $user->first_name }}
				{{ $user->last_name }}

			</li>
		@endforeach
	</ul>


@endsection