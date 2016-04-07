@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Company panel</div>
                <div class="panel-body">

					{!! Form::model($company, ['method' => 'PATCH', 'action' => ['CompanyController@update', $company_id], 'class' => 'form-horizontal', 'files' => true]) !!}



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

						<div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
							{!! Form::label ('website', 'Website', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('website', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('website'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('website') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
							{!! Form::label ('status', 'Status', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('status', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('status'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('status') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>

					    <div class="form-group{{ $errors->has('brands_of_interest') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Brands of interest</label>

                            <div class="col-md-6">
                                <input type="checkbox" class="form-control" name="brands_of_interest[]" value="company1" >Company 1<br>
                                <input type="checkbox" class="form-control" name="brands_of_interest[]" value="company2" >Company 2<br>

                                @if ($errors->has('brands_of_interest'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brands_of_interest') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						@if (Auth::user()->hasRole('company'))
						    <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
								{!! Form::label ('logo', 'Upload logo', array('class' => 'col-md-4 control-label')) !!}
						    
							    <div class="col-md-6">
								    {!! Form::file('logo', '', array('class' => 'form-control')) !!}

								    @if ($errors->any())
		                                    <span class="error">
		                                        <strong>{{ $errors->first() }}</strong>
		                                    </span>
		                            @endif
							    </div>
							    <div class="clearfix"></div>
							    <div class="col-md-offset-4 col-md-6 text-muted">
							    Recommended image dimensions: 600px x 200 px. 
							    Maximum image dimensions: 2600px x 1000px.
							    Maximum upload size: 1 MB.
							    File types: .jpg, .jpeg, .png, .bmp, .gif, .tiff.
							    </div>
						    </div>
					    @endif




					    
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