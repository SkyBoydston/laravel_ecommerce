@extends('layouts.app')

@section('content')
	
	@foreach ($user['attributes'] as $key => $value)
		{{ $key }} <br/>{{ $value }} <br/><br/>
	@endforeach

<a href="{{ env('DOC_ROOT') . "/user/" . $user->id . "/edit" }}">Edit</a>

@endsection