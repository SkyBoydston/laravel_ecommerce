@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit client notes</div>
                <div class="panel-body">

					{!! Form::model($company, ['method' => 'PATCH', 'action' => ['CompanyController@update_notes', $company_id], 'class' => 'form-horizontal']) !!}



					    <div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
					    
						    <div class="col-md-12">
							    {!! Form::textarea('notes', $company->notes, array('class' => 'form-control')) !!}
							    
							    @if ($errors->has('notes'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('notes') }}</strong>
	                                    </span>
	                            @endif
						    </div>
						</div>
						<br>
						


					    
					    <div class="form-group">
                            <div class="col-md-6">
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