@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Phone number panel</div>
                <div class="panel-body">

					{!! Form::open(['method' => 'POST', 'action' => ['PhoneNumberController@store'], 'class' => 'form-horizontal']) !!}



 						<div>
						    <div class="col-md-6">
							    {!! Form::hidden('company_id', $company_id, array('class' => 'form-control')) !!}
						    </div>
					    </div>
					    <div>
						    <div class="col-md-6">
							    {!! Form::hidden('business_contact_id', $business_contact_id, array('class' => 'form-control')) !!}
						    </div>
					    </div>
 						<div>
						    <div class="col-md-6">
							    {!! Form::hidden('user_id', $user_id, array('class' => 'form-control')) !!}
						    </div>
					    </div>
					    <div class="clearfix"></div>

					    <div class="form-group{{ $errors->has('primary_phone') ? ' has-error' : '' }}">
						    {!! Form::label ('primary_phone', 'Primary phone', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('primary_phone', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('primary_phone'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('primary_phone') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('secondary_phone') ? ' has-error' : '' }}">
						    {!! Form::label ('secondary_phone', 'Secondary phone', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('secondary_phone', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('secondary_phone'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('secondary_phone') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>




					    
					    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-check-circle"></i>Save
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