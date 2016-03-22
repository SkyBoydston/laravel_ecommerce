@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        
				<div class="panel panel-default">
	                <div class="panel-heading">Agent details</div>
		                <div class="panel-body">
								@foreach ($agent['attributes'] as $key => $value)
									<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
								@endforeach

								@if ($agent->deleted_at == null)
									{!! Form::open(['action' => ['UserController@destroy', $agent->id], 'method' => 'delete']) !!}
									  {!! Form::submit('Deactivate', ['class'=>'btn btn-danger btn-xs']) !!}
									{!! Form::close() !!}
								@else
									<a href="{{ url('user/reactivate', ['id' => $agent->id]) }}">Reactivate</a>

								@endif

						</div>
				
				</div>
	
		</div>
	</div>
</div>


@endsection