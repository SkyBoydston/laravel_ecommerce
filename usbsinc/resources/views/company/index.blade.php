@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="{{ url('/inbox') }}" class="btn btn-primary">Application inbox</a><br><br>

            <div class="panel panel-default">
                <div class="panel-heading">All companies</div>
                <div class="panel-body">
	                
	                	@foreach ($companies as $company)
		                	<a href="company/{{ $company->id }}">{{ $company->business_name }}</a><br><hr>

		                @endforeach
		          	
		       
				</div>
			</div>
		</div>
	</div>
</div>

@endsection