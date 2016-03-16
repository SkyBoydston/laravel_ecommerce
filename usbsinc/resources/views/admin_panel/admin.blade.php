@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        
				<div class="panel panel-default">
	                <div class="panel-heading">Quotes</div>
		                <div class="panel-body">
								text
								
						</div>
				
				</div>


				<div class="panel panel-default">
	                <div class="panel-heading">Orders</div>
		                <div class="panel-body">
								text
						</div>
				
				</div>


				<div class="panel panel-default">
	                <div class="panel-heading">Clients</div>
		                <div class="panel-body">
								<h3>Companies</h3>

			                	@if ($companies)
			                		@for ($i = 0; $i<count($companies); $i++)
											<a href="{{ "/company/" . $companies[$i]->id }}">
												<h4>Business name</h4> {{ $companies[$i]->business_name }} <br/>
											</a>
									@endfor
								@endif


								<br/><br/>
						</div>
				
				</div>


				<div class="panel panel-default">
	                <div class="panel-heading">Products</div>
		                <div class="panel-body">
								text
						</div>
				
				</div>


				<div class="panel panel-default">
	                <div class="panel-heading">Site content</div>
		                <div class="panel-body">
								text
						</div>
				
				</div>
	
		</div>
	</div>
</div>


@endsection