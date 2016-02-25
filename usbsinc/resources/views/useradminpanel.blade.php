@extends('layouts.app')

@section('content')
<pre>
<?php
	var_dump($user);
?>
</pre>

@foreach ($user as $user)
@endforeach



{!! Form::model($user, ['method' => 'POST', 'action' => ['UserAdminPanelController@update']]) !!}
    {!! Form::label ('first_name', 'First name') !!}
    {!! Form::text('first_name') !!}

    {!! Form::submit('Update') !!}


{!! Form::close() !!}



@endsection