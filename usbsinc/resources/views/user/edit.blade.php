@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin panel</div>
                <div class="panel-body">

					{!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminPanelController@update', $id], 'class' => 'form-horizontal']) !!}








                        <p class="help-block">Business Details</p>







					    <div class="form-group{{ $errors->has('business_name') ? ' has-error' : '' }}">
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
						
					    <div class="form-group{{ $errors->has('business_address_line_1') ? ' has-error' : '' }}">
						    {!! Form::label ('business_address_line_1', 'Address line 1', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('business_address_line_1', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('business_address_line_1'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('business_address_line_1') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('business_address_line_2') ? ' has-error' : '' }}">
						    {!! Form::label ('business_address_line_2', 'Address line 2', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('business_address_line_2', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('business_address_line_2'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('business_address_line_2') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('business_city') ? ' has-error' : '' }}">
						    {!! Form::label ('business_city', 'City', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('business_city', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('business_city'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('business_city') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('business_state') ? ' has-error' : '' }}">
						    {!! Form::label ('business_state', 'State', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('business_state', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('business_state'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('business_state') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('business_zip_code') ? ' has-error' : '' }}">
						    {!! Form::label ('business_zip_code', 'Zip code', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('business_zip_code', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('business_zip_code'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('business_zip_code') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

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









					    <p class="help-block">Owner Contact</p>










						<div class="form-group{{ $errors->has('business_contact_first_name') ? ' has-error' : '' }}">
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