@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        
        	<ul class="nav nav-tabs">
        		<li class="active"><a data-toggle="tab" href="#User">User</a></li>
        		<li class=""><a data-toggle="tab" href="#Company">Company</a></li>
        		<li class=""><a data-toggle="tab" href="#Company_address">Company address</a></li>
        		<li class=""><a data-toggle="tab" href="#Company_contact">Company contact</a></li>
        		<li class=""><a data-toggle="tab" href="#Company_phone_number">Company phone number</a></li>


        	</ul>

        	<div class="tab-content">
				<div id="User" class="tab-pane fade in active">
					<div class="panel panel-default">
		                <div class="panel-heading">User details</div>
			                <div class="panel-body">
								

								@foreach ($user['attributes'] as $key => $value)
									<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
								@endforeach


								<a href="{{ "/user/" . $user_id . "/edit" }}">Edit</a>

							</div>
					</div>

				</div>
				<div id="Company" class="tab-pane fade">
					<div class="panel panel-default">
		                <div class="panel-heading">Company details</div>
			                <div class="panel-body">
								
								@foreach ($company['attributes'] as $key => $value)
									<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
								@endforeach

													
								<a href="{{ "/company/" . $company_id . "/edit" }}">Edit</a>

							</div>

					</div>					
				</div>
				<div id="Company_address" class="tab-pane fade">
					<div class="panel panel-default">
		                <div class="panel-heading">Company address details</div>
			                <div class="panel-body">

			                	<h3>Office</h3>
								
								@foreach ($company_office_address['attributes'] as $key => $value)
									<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
								@endforeach

													
								<a href="{{ "/address/" . $company_office_address_id . "/edit" }}">Edit</a>

			                	<h3>Default shipping</h3>
								
								@foreach ($company_default_shipping_address['attributes'] as $key => $value)
									<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
								@endforeach

													
								<a href="{{ "/address/" . $company_default_shipping_address_id . "/edit" }}">Edit</a>
							</div>

					</div>					
				</div>
				<div id="Company_contact" class="tab-pane fade">
					<div class="panel panel-default">
		                <div class="panel-heading">Company contact details</div>
			                <div class="panel-body">
								
								@foreach ($business_contact['attributes'] as $key => $value)
									<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
								@endforeach

													
								<a href="{{ "/business_contact/" . $business_contact_id . "/edit" }}">Edit</a>

							</div>

					</div>					
				</div>
				<div id="Company_phone_number" class="tab-pane fade">
					<div class="panel panel-default">
		                <div class="panel-heading">Company phone number details</div>
			                <div class="panel-body">
								
								@foreach ($company_phone_number['attributes'] as $key => $value)
									<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
								@endforeach

													
								<a href="{{ "/phone_number/" . $company_phone_number_id . "/edit" }}">Edit</a>

							</div>

					</div>					
				</div>
			</div>
		            












		</div>
	</div>
</div>


@endsection