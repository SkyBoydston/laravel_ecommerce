@extends('layouts.app')

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        
        	<ul class="nav nav-tabs">  <!-- The $active indexes are out of order because the tabs were added out of order and there was already code elsewhere that used these existing indices. -->
        		<li class="{{ $active[0] }}"><a data-toggle="tab" href="#User">User</a></li>
        		<li class="{{ $active[1] }}"><a data-toggle="tab" href="#Company">Company</a></li>
        		<li class="{{ $active[2] }}"><a data-toggle="tab" href="#Company_address">Company addresses</a></li>
        		@if (Auth::user()->hasRole('admin'))
	        		<li class="{{ $active[3] }}"><a data-toggle="tab" href="#Pricing">Pricing</a></li>
	        	@endif
        		@if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('company'))
	        		<li class="{{ $active[4] }}"><a data-toggle="tab" href="#Company_contact">Company contact</a></li>
        		@endif
        		@if (Auth::user()->hasRole('admin'))
	        		<!-- <li class="{{ $active[8] }}"><a data-toggle="tab" href="#QuoteHistory">Quote history</a></li>
	        		<li class="{{ $active[9] }}"><a data-toggle="tab" href="#OrderHistory">Order history</a></li> -->
	        	@endif
        		@if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('company'))
	        		<li class="{{ $active[5] }}"><a data-toggle="tab" href="#Agents">Agents</a></li>
	        	@endif
	        	@if (false)
	        		<li class="{{ $active[7] }}"><a data-toggle="tab" href="#Transactions">Transactions</a></li>
	        	@endif
	        	@if (Auth::user()->hasRole('admin'))
	        		<li class="{{ $active[6] }}"><a data-toggle="tab" href="#Notes">Notes</a></li>
	        	@endif


        	</ul>

        	<div class="tab-content">
				<div id="User" class="tab-pane fade {{ $active[0] }}">
					<div class="panel panel-default">
		                <div class="panel-heading">User details</div>
			                <div class="panel-body">
								
								<h3>User details</h3>

			                	@if ($user)
									<h4>Name</h4> 
									{{ ucfirst($user->first_name) }} {{ ucfirst($user->last_name) }} <br/> <br/> 

									<h4>Email</h4> 
									{{ $user->email }}<br/> <br/> 
								@endif

								<a class="btn btn-primary" href="{{ "/user/" . $user_id . "/edit" }}">Edit</a>

								<br/><br/>

								@if (Auth::user()->hasRole('agent'))
									<h3>User phone number</h3>

									@if ($user_phone_number)
										<h4>Primary phone</h4> 
										{{ $user_phone_number->primary_phone }}<br/> <br/>

										<h4>Secondary phone</h4> 
										{{ $user_phone_number->secondary_phone }}<br/> <br/> 
									

										<a class="btn btn-primary" href="{{ '/phone_number/' . $user_phone_number_id . '/edit' }}">Edit</a>
									@else
										
										<a class="btn btn-primary" href="{{ action('PhoneNumberController@create', ['user_id' => $user_id]) }}">Create</a>
									@endif
								@endif
							</div>
					</div>

				</div>

				

				<div id="Company" class="tab-pane fade {{ $active[1] }}">
					<div class="panel panel-default">
		                <div class="panel-heading">Company details</div>
			                <div class="panel-body">
								
								<h3>Company details</h3>


								@if ($company)
									<h4>Business name</h4> 
									{{ $company->business_name }}<br/> <br/>

									<h4>Website</h4> 
									{{ $company->website }}<br/> <br/> 

									<h4>Business type</h4> 
									{{ $company->type }}<br/> <br/>

									<h4>Status</h4> 
									{{ $company->status }}<br/> <br/>

									<h4>Brands of interest</h4> 
									{{ $company->brands_of_interest }}<br/> <br/>

									<h4>Contact method preference</h4> 
									{{ $company->contact_me_via }}<br/> <br/> 

									<h4>How did you hear about us?</h4> 
									{{ $company->how_heard_about }}<br/> <br/> 

									
								
								@if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('company'))
									<a class="btn btn-primary" href="{{ "/company/" . $company_id . "/edit?notes=false" }}">Edit</a>
								@endif

								<br/><br/>
								@endif

								<h3>Phone number</h3>


								@if ($company_phone_number)

									<h4>Primary phone</h4> 
									{{ $company_phone_number->primary_phone }}<br/> <br/>

									<h4>Secondary phone</h4> 
									{{ $company_phone_number->secondary_phone }}<br/> <br/> 


									@if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('company'))				
										<a class="btn btn-primary" href="{{ "/phone_number/" . $company_phone_number_id . "/edit" }}">Edit</a>
									@endif

								@else
									
									@if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('company'))
										<a class="btn btn-primary" href="{{ action('PhoneNumberController@create', ['company_id' => $company_id]) }}">Create</a>
									@endif

								@endif

							</div>

					</div>					
				</div>
				<div id="Company_address" class="tab-pane fade {{ $active[2] }}">
					<div class="panel panel-default">
		                <div class="panel-heading">Company addresses</div>
			                <div class="panel-body">

			                	<h3>Office</h3>
								
								@if ($company_office_address)


									{{ $company_office_address->address_line_1 }}<br/>
									{{ $company_office_address->address_line_2 }}<br/>
									{{ $company_office_address->city }}, {{ $company_office_address->state }} {{ $company_office_address->zip_code }}<br/><br/>

									
									@if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('company'))				
										<a class="btn btn-primary" href="{{ "/address/" . $company_office_address_id . "/edit" }}">Edit</a>
									@endif

								@else

									@if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('company'))
										<a class="btn btn-primary" href="{{ action('AddressController@create', ['company_id' => $company_id, 'type' => 'office']) }}">Create</a>
									@endif

								@endif

			                	<h3>Default shipping</h3>
								
								@if ($company_default_shipping_address)

									{{ $company_default_shipping_address->address_line_1 }}<br/>
									{{ $company_default_shipping_address->address_line_2 }}<br/>
									{{ $company_default_shipping_address->city }}, {{ $company_default_shipping_address->state }} {{ $company_default_shipping_address->zip_code }}<br/><br/>

									@if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('company'))
										<a class="btn btn-primary" href="{{ "/address/" . $company_default_shipping_address_id . "/edit" }}">Edit</a>
									@endif
									
								@else

									@if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('company'))
										<a class="btn btn-primary" href="{{ action('AddressController@create', ['company_id' => $company_id, 'type' => 'default_shipping']) }}">Create</a>
									@endif

								@endif

													
							</div>

					</div>					
				</div>

				@if (Auth::user()->hasRole('admin'))
					<div id="Pricing" class="tab-pane fade {{ $active[3] }}">
						<div class="panel panel-default">
			                <div class="panel-heading">Pricing</div>
				                <div class="panel-body">

				                	<h3>Pricing details</h3>

				                	<div class="col-md-6"><strong>Category</strong></div>
				                    <div class="col-md-6"><strong>Percentage</strong></div>
				                    <br>
									<br>
									
									@if ($price_mods)
										@foreach ($price_mods as $mod)
											<a href="{{ url('price') . '/' . $mod->id . '/edit' }}">
											<div class="col-md-6"> 
												{{ $mod->category }} 
											</div>
											<div class="col-md-6"> 
												{{ number_format($mod->price_modifier_percentage, 2) }}%
											</div>

											<br>
											<br>
											</a>
										@endforeach
									@endif
														
								</div>

						</div>					
					</div>
				@endif

				@if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('company'))
					<div id="Company_contact" class="tab-pane fade {{ $active[4] }}">
						<div class="panel panel-default">
			                <div class="panel-heading">Company contact details</div>
				                <div class="panel-body">

									<h3>Details</h3>

									@if ($business_contact)

										<h4>Name</h4> 
										{{ ucfirst($business_contact->first_name) }} {{ ucfirst($business_contact->last_name) }} <br/> <br/> 

										<h4>Title</h4> 
										{{ $business_contact->title }}<br/> <br/> 

										
									@endif

														
									<a class="btn btn-primary" href="{{ "/business_contact/" . $business_contact_id . "/edit" }}">Edit</a>

									<br/><br/>

									<h3>Phone number</h3>

									@if ($business_contact_phone_number)

										<h4>Primary phone</h4> 
										{{ $business_contact_phone_number->primary_phone }}<br/> <br/>

										<h4>Secondary phone</h4> 
										{{ $business_contact_phone_number->secondary_phone }}<br/> <br/> 

										<a class="btn btn-primary" href="{{ "/phone_number/" . $business_contact_phone_number_id . "/edit" }}">Edit</a>
									@else
										
										<a class="btn btn-primary" href="{{ action('PhoneNumberController@create', ['business_contact_id' => $business_contact_id]) }}">Create</a>
									@endif

									

								</div>

						</div>					
					</div>
				@endif

				@if (Auth::user()->hasRole('admin'))
					<div id="QuoteHistory" class="tab-pane fade {{ $active[8] }}">
						<div class="panel panel-default">
			                <div class="panel-heading">Quote history</div>
				                <div class="panel-body">
									<br>
									<div class="col-md-3"><strong>Submission date</strong></div>
									<div class="col-md-3"><strong>Status</strong></div>
									<div class="col-md-3"><strong>Number</strong></div>
									<div class="col-md-3"><strong>Total value</strong></div>
									<div class="clearfix"></div> 

									@if (count($quote_history))

										@foreach ($quote_history as $quote)
											<div class="col-md-3">
												{{ date('M j, Y', strtotime($quote->submitted_for_approval)) }}
											</div>
											<div class="col-md-3">
												{{ $quote->status($quote) }}
											</div>
											<div class="col-md-3">
												{{ $quote->number }}
											</div>
											<div class="col-md-3">
												{{ $quote->total($quote) }}
											</div>
											<div class="clearfix"></div>
											<hr>
										@endforeach
									@endif

								</div>

						</div>					
					</div>

					<div id="OrderHistory" class="tab-pane fade {{ $active[9] }}">
						<div class="panel panel-default">
			                <div class="panel-heading">Order history</div>
				                <div class="panel-body">
					                <br>
									<div class="col-md-2"><strong>Submission date</strong></div>
									<div class="col-md-2"><strong>Number</strong></div>
									<div class="col-md-2"><strong>Status</strong></div>
									<div class="col-md-2"><strong>Expected shipping date</strong></div>
									<div class="col-md-2"><strong>Expected arrival date</strong></div>
									<div class="col-md-2"><strong>Total value</strong></div>
									<div class="clearfix"></div> 

									@if (count($order_history))
										@foreach ($order_history as $order)
											<div class="col-md-2">
												{{ date('M j, Y', strtotime($order->submitted_for_approval)) }}
											</div>
											<div class="col-md-2">
												{{ $order->number }}
											</div>
											<div class="col-md-2">
												{{ $order->status($order) }}
											</div>
											<div class="col-md-2">
												{{ $order->estimated_shipping_date }}
											</div>
											<div class="col-md-2">
												{{ $order->estimated_arrival }}
											</div>
											<div class="col-md-2">
												{{ $order->total($order) }}
											</div>
											<div class="clearfix"></div>
											<hr>
										@endforeach
									@endif

								</div>

						</div>					
					</div>
				@endif

				@if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('company'))
					<div id="Agents" class="tab-pane fade {{ $active[5] }}">
						<div class="panel panel-default">
			                <div class="panel-heading">All agents</div>
				                <div class="panel-body">

					                <a class="btn btn-primary" href="{{ url('user/create') . '?id=' . $company_id }}">Add agent</a>

									<h3>Active agents</h3>


									@if ($agents)
										
											@foreach ($agents as $agent)
												<a href="{{ "/agent/" . $agent->id }}">
													<h4>Name</h4> 
													{{ ucfirst($agent->first_name) }} {{ ucfirst($agent->last_name) }}<br/><hr>

												</a>
											@endforeach
											
									@else	

										No agents.
										
									@endif
									<br><br>
									<a class="btn btn-primary" href="{{ url('agent?q=') . $company_id }}">View deactivated agents</a>
											

									<br/><br/>

								</div>

						</div>					
					</div>
				@endif
				@if (Auth::user()->hasRole('admin'))
					<div id="Notes" class="tab-pane fade {{ $active[6] }}">
						<div class="panel panel-default">
			                <div class="panel-heading">Client notes</div>
				                <div class="panel-body">

											{!! Form::textarea('notes', $company->notes, array('class' => 'form-control', 'rows' => '4', 'disabled' => 'disabled', 'style' => 'cursor:default;')) !!}
									@if ($company->notes)
											<!-- <textarea rows='10' cols="50">{{ $company->notes }}</textarea> -->

										
									@endif
									<br>
									<br>
									
									<a class="btn btn-primary" href="{{ "/company/" . $company_id . "/edit?notes=true" }}">Edit</a>
											

									<br/><br/>

								</div>

						</div>					
					</div>
				@endif
				@if (false)	
				<div id="Transactions" class="tab-pane fade {{ $active[7] }}">
					<div class="panel panel-default">
		                <div class="panel-heading">Transactions</div>
			                <div class="panel-body">
								
								<h3>All company transactions (this should actually be a history)</h3>

									<div class="col-md-2"><strong>Submission date</strong></div>
									<div class="col-md-1"><strong>Type</strong></div>
									<div class="col-md-2"><strong>Number</strong></div>
									<div class="col-md-2"><strong>Client reference</strong></div>
									<div class="col-md-2"><strong>Agent</strong></div>
									<div class="col-md-2"><strong>Status</strong></div>
									<div class="col-md-1"><strong>Total value</strong></div>
									<div class="clearfix"></div> 

									@if(count($transactions))
										@foreach ($transactions->user as $user)
												{{-- $user->first_name --}}<br>
											@foreach ($user['sale_documents'] as $doc)
												<a href=" 
												@if ($doc->isOrder($doc)) 
													{{'/order/' . $doc->id}}
												@elseif ($doc->isQuote($doc)) 
													{{'/quote/' . $doc->id}}
												@endif
												">
													<div class="col-md-2"> 
														{{ date('M j, Y', strtotime($doc->submitted_for_approval)) }}
													</div>
													<div class="col-md-1"> 
														@if ($doc->CheckIfIsOrder($doc))
															Order<br>
														@endif
														@if ($doc->CheckIfIsQuote($doc))
															Quote<br>
														@endif
													</div>
													<div class="col-md-2">
														{{ $doc->number }}
													</div>
													<div class="col-md-2"> 
														{{ $doc->client_reference }}
													</div>
													<div class="col-md-2">
														{{ $doc->user->first_name }} {{ $doc->user->last_name }}
													</div>
													<div class="col-md-2"> 
														{{ $doc->status($doc) }}
													</div>
													<div class="col-md-1">
														{{ $doc->total($doc) }}
													</div>
													<div class="clearfix"></div> 
													

												</a>
												<hr>
											@endforeach


										@endforeach

									@else 
											No transactions.
									@endif 


							</div>

					</div>					
				</div>
				@endif

				</div>
			</div>
		            



		</div>
	</div>
</div>


@endsection