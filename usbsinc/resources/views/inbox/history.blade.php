@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Application history</div>
                <div class="panel-body">
                	<h3>Approved applications</h3>
					@if (!$approved_companies->isEmpty())
						
                    	@foreach ($approved_companies as $company)
		                	<a href="../company/{{ $company->id }}">Company name: {{ $company->business_name }} <br>
			                	@foreach ($company->user as $user)
			                		@if ($user->role == 'company')
					                	Approved at: {{ $user->approved_denied_at }}
				                	@endif
			                	@endforeach
		                	</a><br>
		                	<hr>

		                @endforeach
		            @else
		          		No approved applications. <hr>
		            @endif

	            	<h3>Denied applications</h3>
					@if (!$denied_companies->isEmpty())
	                	@foreach ($denied_companies as $company)
		                	<a href="../company/{{ $company->id }}">Company name: {{ $company->business_name }} <br>
			                	@foreach ($company->user as $user)
				                	@if ($user->role == 'denied')
					                	Denied at: {{ $user->approved_denied_at }}
				                	@endif
			                	@endforeach
		                	</a><br>
		                	<hr>

		                @endforeach
		            @else
		          		No denied applications. <hr>
		            @endif
		            
		            <a href="{{ url('inbox') }}">Back to inbox</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection