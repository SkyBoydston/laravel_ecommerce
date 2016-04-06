@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit price</div>
                <div class="panel-body">

                {{ Form::model($price, ['method' => 'PATCH', 'action' => ['PriceController@update', $price->id], 'class' => 'form-horizontal']) }}

                    
                    {{ Form::hidden('item_id', null, array('class' => 'form-control')) }}
                    
                    <br>


                    
                    {{ Form::hidden('sale_document_id', null, array('class' => 'form-control')) }}
                    
                    <br>

                    {{ Form::label('price_modifier_percentage', 'Percentage')}} <em>Values beyond two decimal places will be rounded</em>
                    {{ Form::text('price_modifier_percentage', null, array('class' => 'form-control')) }}

                    <br>

                    {{ Form::label('price_modifier_amount', 'Amount')}}
                    {{ Form::text('price_modifier_amount', null, array('class' => 'form-control')) }}

                    <br>


                    <div class="form-group">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-check-circle"></i>Update price
                            </button>
                        </div>
                    </div>

                {{ Form::close() }}

				</div>
			</div>
		</div>
	</div>
</div>

@endsection