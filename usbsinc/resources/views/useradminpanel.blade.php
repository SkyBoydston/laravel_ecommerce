@extends('layouts.app')

@section('content')



{!! Form::model($user, ['method' => 'POST', 'action' => ['UserAdminPanelController@update']]) !!}
    {!! Form::label ('first_name', 'First name') !!}
    {!! Form::text('first_name') !!}

    {!! Form::submit('Update') !!}


{!! Form::close() !!}



@endsection