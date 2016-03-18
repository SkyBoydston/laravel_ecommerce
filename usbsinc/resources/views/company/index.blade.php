@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All companies</div>
                <div class="panel-body">
                	@foreach ($companies as $company)
	                	<a href="company/{{ $company->id }}">Company name: {{ $company->business_name }} </a><br><hr>

	                @endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@endsection