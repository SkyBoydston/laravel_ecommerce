@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Application inbox</div>
                <div class="panel-body">
					@if (!$companies->isEmpty())
                    	@foreach ($companies as $company)
		                	<a href="company/{{ $company->id }}">Company name: {{ $company->business_name }} </a><br>
		                	<a href="{{ action('InboxController@confirm', ['id' => $company->id]) }}">Confirm</a><br>
		                	<a href="{{ action('InboxController@deny', ['id' => $company->id]) }}">Deny</a><br>
		                	<hr>

		                @endforeach
		            @else
		          		No pending applications. <hr>
		            @endif

		            <a href="{{ url('/inbox/history') }}">History</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection