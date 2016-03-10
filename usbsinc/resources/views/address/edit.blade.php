@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Address panel</div>
                <div class="panel-body">

					{!! Form::model($address, ['method' => 'PATCH', 'action' => ['AddressController@update', $address_id], 'class' => 'form-horizontal']) !!}








                        <!-- <p class="help-block">Business Details</p> -->







<!-- 					    <div class="form-group{{ $errors->has('business_name') ? ' has-error' : '' }}">
						    {!! Form::label ('business_name', 'Company name', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('business_name', null, array('class' => 'form-control')) !!}
							    
							    @if ($errors->has('business_name'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('business_name') }}</strong>
	                                    </span>
	                            @endif
						    </div>
						</div>

						<div class="form-group{{ $errors->has('business_website') ? ' has-error' : '' }}">
							{!! Form::label ('business_website', 'Website', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('business_website', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('business_website'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('business_website') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>
 -->
					    <div class="form-group{{ $errors->has('address_line_1') ? ' has-error' : '' }}">
						    {!! Form::label ('address_line_1', 'Address line 1', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('address_line_1', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('address_line_1'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('address_line_1') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('address_line_2') ? ' has-error' : '' }}">
						    {!! Form::label ('address_line_2', 'Address line 2', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('address_line_2', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('address_line_2'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('address_line_2') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
						    {!! Form::label ('city', 'City', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('city', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('city'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('city') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
						    {!! Form::label ('state', 'State', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('state', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('state'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('state') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('zip_code') ? ' has-error' : '' }}">
						    {!! Form::label ('zip_code', 'Zip code', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('zip_code', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('zip_code'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('zip_code') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
						    {!! Form::label ('type', 'Type', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('type', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('type'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('type') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>
<!-- 
					    <div class="form-group{{ $errors->has('business_primary_phone') ? ' has-error' : '' }}">
						    {!! Form::label ('business_primary_phone', 'Primary phone', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('business_primary_phone', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('business_primary_phone'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('business_primary_phone') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('business_secondary_phone') ? ' has-error' : '' }}">
						    {!! Form::label ('business_secondary_phone', 'Secondary phone', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('business_secondary_phone', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('business_secondary_phone'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('business_secondary_phone') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>
 -->








					    <!-- <p class="help-block">Owner Contact</p> -->










						<!-- <div class="form-group{{ $errors->has('business_contact_first_name') ? ' has-error' : '' }}">
						    {!! Form::label ('business_contact_first_name', 'First name', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('business_contact_first_name', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('business_contact_first_name'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('business_contact_first_name') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('business_contact_last_name') ? ' has-error' : '' }}">
						    {!! Form::label ('business_contact_last_name', 'Last name', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('business_contact_last_name', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('business_contact_last_name'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('business_contact_last_name') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('business_contact_title') ? ' has-error' : '' }}">
						    {!! Form::label ('business_contact_title', 'Title', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('business_contact_title', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('business_contact_title'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('business_contact_title') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

						<div class="form-group{{ $errors->has('business_contact_primary_phone') ? ' has-error' : '' }}">
						    {!! Form::label ('business_contact_primary_phone', 'Primary phone', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('business_contact_primary_phone', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('business_contact_primary_phone'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('business_contact_primary_phone') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('business_contact_secondary_phone') ? ' has-error' : '' }}">
						    {!! Form::label ('business_contact_secondary_phone', 'Secondary phone', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('business_contact_secondary_phone', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('business_contact_secondary_phone'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('business_contact_secondary_phone') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>
 
					    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						    {!! Form::label ('email', 'Email', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('email', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('email'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>


-->









					    
					    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-check-circle"></i>Update
                                </button>
                            </div>
                        </div>


                        


					{!! Form::close() !!}

				</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection