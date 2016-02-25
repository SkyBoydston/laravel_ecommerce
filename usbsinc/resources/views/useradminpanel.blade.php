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

<form action="" method="post">
		<label for="first_name">First name</label>
		<input type="text" name="first_name"></input>
		<label for="last_name">Last name</label>
		<input type="text" name="last_name"></input>
		<label for="email">Email</label>
		<input type="text" name="email"></input>
</form>


{!! Form::model($user, ['method' => 'POST', 'action' => ['UserAdminPanelController@update']]) !!}
    {!! Form::label ('name', 'first_name') !!}
    {!! Form::text('first_name') !!}

   <!--  <label for="first_name">First name</label> -->
		<!-- <input type="text" name="first_name"></input> -->
		<label for="last_name">Last name</label>
		<input type="text" name="last_name"></input>
		<label for="email">Email</label>
		<input type="text" name="email"></input>
{!! Form::close() !!}



@endsection