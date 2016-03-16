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
						</div>
				
				</div>
	
		</div>
	</div>
</div>


@endsection