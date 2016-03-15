@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
	        <div class="panel panel-default">
                <div class="panel-heading">Company details</div>
	                <div class="panel-body">
						
						<h3>Company details</h3>
						
						@if ($company)
							@foreach ($company['attributes'] as $key => $value)
								<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
							@endforeach
								
								
						<a href="{{ "/company/" . $company->id . "/edit" }}">Edit</a>
						@endif
						<br/><br/>

					</div>
			</div>
	
		</div>
	</div>
</div>


@endsection