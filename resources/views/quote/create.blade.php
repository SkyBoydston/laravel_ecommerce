@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create new quote</div>
                <div class="panel-body">

					{!! Form::open(['method' => 'POST', 'action' => ['QuoteController@store'], 'class' => 'form-horizontal']) !!}



 						<div>
						    <div class="col-md-6">
							    {!! Form::hidden('user_id', Auth::user()->id, array('class' => 'form-control')) !!}
						    </div>
					    </div>
					    <div>
						    <div class="col-md-6">
							    {!! Form::hidden('converted_to_order', '0000-00-00 00:00:00', array('class' => 'form-control')) !!}
						    </div>
					    </div>
					    
					    <div class="clearfix"></div>

					    <div class="form-group{{ $errors->has('client_reference') ? ' has-error' : '' }}">
						    {!! Form::label ('client_reference', 'Client reference', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::text('client_reference', null, array('class' => 'form-control')) !!}

							    @if ($errors->has('client_reference'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('client_reference') }}</strong>
	                                    </span>
	                            @endif
						    </div>
					    </div>
					    <br>

					    <div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
						    {!! Form::label ('notes', 'Notes', array('class' => 'col-md-4 control-label')) !!}
					    
						    <div class="col-md-6">
							    {!! Form::textarea('notes', null, array('class' => 'form-control')) !!}
							    
							    @if ($errors->has('notes'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('notes') }}</strong>
	                                    </span>
	                            @endif
						    </div>
						</div>
						<br>
			
					    
					    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-check-circle"></i>Create
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