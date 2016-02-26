@extends('layouts.app')

@section('content')



{!! Form::model($user, ['method' => 'POST', 'action' => ['UserAdminPanelController@update']]) !!}
	<div class="form-group">
	    {!! Form::label ('business_name', 'Company name') !!}
	    {!! Form::text('business_name') !!}

	    {!! Form::label ('website', 'Website') !!}
	    {!! Form::text('website') !!}

	    {!! Form::label ('business_address', 'Address') !!}
	    {!! Form::text('business_address') !!}

	    {!! Form::label ('business_city', 'City') !!}
	    {!! Form::text('business_city') !!}

	    {!! Form::label ('business_state', 'State') !!}
	    {!! Form::text('business_state') !!}

	    {!! Form::label ('business_zip_code', 'Zip code') !!}
	    {!! Form::text('business_zip_code') !!}

	    {!! Form::label ('business_primary_phone', 'Primary phone') !!}
	    {!! Form::text('business_primary_phone') !!}

	    {!! Form::label ('business_secondary_phone', 'Secondary phone') !!}
	    {!! Form::text('business_secondary_phone') !!}

	    

	    {!! Form::submit('Update') !!}

	</div>

{!! Form::close() !!}



@endsection