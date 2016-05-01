@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        
				<div class="panel panel-default">
	                <div class="panel-heading">Agent details</div>
		                <div class="panel-body">
								

								<h4>Name</h4> 
								{{ ucfirst($agent->first_name) }} {{ ucfirst($agent->last_name) }} <br/> <br/> 

								<h4>Email</h4> 
								{{ $agent->email }}<br/> <br/> 

								@if (count($phone_numbers))
									<h4>Primary phone</h4> 
									{{ $phone_numbers->primary_phone }}<br/> <br/>

									<h4>Secondary phone</h4> 
									{{ $phone_numbers->secondary_phone }}<br/> <br/> 
								@endif



								<h4>Agent pricing</h4>

								<div class="col-md-4"><strong>Category</strong></div>
								<div class="col-md-4"><strong>Brand</strong></div>
								<div class="col-md-4"><strong>Percentage</strong></div>
								<br>
								<br>

								@foreach ($prices as $price)

									<a href="{{ url('price') . '/' . $price->id . '/edit' }}">
										<div class="col-md-4">
											{{ $price->category }} 
										</div>
										<div class="col-md-4">
											{{ $price->brand }} 
										</div>
										<div class="col-md-4">
											{{ $price->price_modifier_percentage }}% 
										</div>
									</a>
									<br>
									<br>
								@endforeach

								<br>
								<br>

								@if ($agent->deleted_at == null)
									{!! Form::open(['action' => ['UserController@destroy', $agent->id], 'method' => 'delete']) !!}
									  {!! Form::submit('Deactivate', ['class'=>'btn btn-danger btn-xs']) !!}
									{!! Form::close() !!}


								@else
									<a href="{{ url('user/reactivate', ['id' => $agent->id]) }}" class="btn btn-primary">Reactivate</a>

								@endif
								<br>
								<br>
								<a href="{{ url()->previous() }}" class="btn btn-primary">Go back</a>

						</div>
				
				</div>
	
		</div>
	</div>
</div>


@endsection