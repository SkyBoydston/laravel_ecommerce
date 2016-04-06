@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        
				<div class="panel panel-default">
	                <div class="panel-heading">Deactivated agents</div>
		                <div class="panel-body">
								@if (count($agents))
									@foreach ($agents as $agent)
										<a href="{{ "/agent/" . $agent->id }}">
											<h4>Name</h4> {{ ucfirst($agent->first_name) }} {{ ucfirst($agent->last_name) }}<br/><hr>

										</a>
									@endforeach
								@else
									No deactivated agents

								@endif

								<br>
								<br>
								<a href="{{ url('company') . '/' . $company_id . '/?tab=5' }}" class="btn btn-primary">Go back</a>

						</div>
				
				</div>
	
		</div>
	</div>
</div>


@endsection