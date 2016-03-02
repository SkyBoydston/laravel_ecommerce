@extends('layouts.app')

@section('content')


	
	@foreach ($user['attributes'] as $key => $value)
		{{ ucfirst(str_replace('_', ' ', $key)) }} <br/>{{ $value }} <br/><br/>
	@endforeach

<a href="{{ env('DOC_ROOT') . "/user/" . $id . "/edit" }}">Edit</a>

@endsection