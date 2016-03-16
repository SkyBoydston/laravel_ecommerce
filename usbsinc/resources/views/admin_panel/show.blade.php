@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        
        	<ul class="nav nav-tabs">
        		<li class="active"><a data-toggle="tab" href="#User">User</a></li>
        		<li class=""><a data-toggle="tab" href="#Companies">Companies</a></li>
        		<li class=""><a data-toggle="tab" href="#Company">Company</a></li>
        		<li class=""><a data-toggle="tab" href="#Company_address">Company addresses</a></li>
        		<li class=""><a data-toggle="tab" href="#Company_contact">Company contact</a></li>
        		<li class=""><a data-toggle="tab" href="#Agents">Agents</a></li>


        	</ul>

        	<div class="tab-content">
				<div id="User" class="tab-pane fade in active">
					<div class="panel panel-default">
		                <div class="panel-heading">User details</div>
			                <div class="panel-body">
								
								<h3>User details</h3>

			                	@if ($user)
									@foreach ($user['attributes'] as $key => $value)
										<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
									@endforeach
								@endif

								<a href="{{ "/user/" . $user_id . "/edit" }}">Edit</a>

								<br/><br/>

								<h3>User phone number</h3>This will show if the user is an agent.

								@if ($user_phone_number)
									@foreach ($user_phone_number['attributes'] as $key => $value)
										<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
									@endforeach
								

									<a href="{{ "/phone_number/" . $user_phone_number_id . "/edit" }}">Edit</a>
								@else
									
									<a href="{{ action('PhoneNumberController@create', ['user_id' => $user_id]) }}">Create</a>
								@endif
							</div>
					</div>

				</div>

				<div id="Companies" class="tab-pane fade">
					<div class="panel panel-default">
		                <div class="panel-heading">All companies</div>
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

				</div>

				<div id="Company" class="tab-pane fade">
					<div class="panel panel-default">
		                <div class="panel-heading">Company details</div>
			                <div class="panel-body">
								
								<h3>Company details</h3>


								@if ($company)
									@foreach ($company['attributes'] as $key => $value)
										<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
									@endforeach
								
								
								<a href="{{ "/company/" . $company_id . "/edit" }}">Edit</a>
								<br/><br/>

								<h3>Phone number</h3>


								@if ($company_phone_number)
									@foreach ($company_phone_number['attributes'] as $key => $value)
										<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
									@endforeach
								@endif

													
									<a href="{{ "/phone_number/" . $company_phone_number_id . "/edit" }}">Edit</a>

								@else
									
									<a href="{{ action('PhoneNumberController@create', ['company_id' => $company_id]) }}">Create</a>
								@endif

							</div>

					</div>					
				</div>
				<div id="Company_address" class="tab-pane fade">
					<div class="panel panel-default">
		                <div class="panel-heading">Company addresses</div>
			                <div class="panel-body">

			                	<h3>Office</h3>
								
								@if ($company_office_address)
									@foreach ($company_office_address['attributes'] as $key => $value)
										<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
									@endforeach
													
									<a href="{{ "/address/" . $company_office_address_id . "/edit" }}">Edit</a>
								@else
									<a href="{{ action('AddressController@create', ['company_id' => $company_id, 'type' => 'office']) }}">Create</a>

								@endif

			                	<h3>Default shipping</h3>
								
								@if ($company_default_shipping_address)
									@foreach ($company_default_shipping_address['attributes'] as $key => $value)
										<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
									@endforeach

									<a href="{{ "/address/" . $company_default_shipping_address_id . "/edit" }}">Edit</a>
									
								@else

									<a href="{{ action('AddressController@create', ['company_id' => $company_id, 'type' => 'default_shipping']) }}">Create</a>

								@endif

													
							</div>

					</div>					
				</div>
				<div id="Company_contact" class="tab-pane fade">
					<div class="panel panel-default">
		                <div class="panel-heading">Company contact details</div>
			                <div class="panel-body">

								<h3>Details</h3>

								@if ($business_contact)
									@foreach ($business_contact['attributes'] as $key => $value)
										<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
									@endforeach
								@endif

													
								<a href="{{ "/business_contact/" . $business_contact_id . "/edit" }}">Edit</a>

								<br/><br/>

								<h3>Phone number</h3>

								@if ($business_contact_phone_number)
									@foreach ($business_contact_phone_number['attributes'] as $key => $value)
										<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
									@endforeach

									<a href="{{ "/phone_number/" . $business_contact_phone_number_id . "/edit" }}">Edit</a>
								@else
									
									<a href="{{ action('PhoneNumberController@create', ['business_contact_id' => $business_contact_id]) }}">Create</a>
								@endif

								

							</div>

					</div>					
				</div>

				<div id="Agents" class="tab-pane fade">
					<div class="panel panel-default">
		                <div class="panel-heading">All agents</div>
			                <div class="panel-body">

								<h3>Agents</h3>

								@if ($agents)
									@for ($i=0; $i<count($agents); $i++)
										@foreach ($agents[$i]['attributes'] as $key => $value)
											<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
										@endforeach
											<a href="{{ "/agent/" . $agents[$i]->id }}">View</a>
									@endfor
								@endif

													

								<br/><br/>

							</div>

					</div>					
				</div>
								
				</div>
			</div>
		            












		</div>
	</div>
</div>


@endsection