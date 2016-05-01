@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add an item</div>
                <div class="panel-body">

                {{ Form::open(array('method' => 'POST', 'url' => 'item', 'files' => true)) }}

                    {{ Form::label('category', 'Category') }}
                    {{ Form::select('category', $categories, null, array('class' => 'form-control')) }}
                    
                    <br>

                    -or-
                    <br>

                    {{ Form::label('new_category', 'Create a new category')}}
                    {{ Form::text('new_category', null, array('class' => 'form-control')) }}

                    <br>

                    {{ Form::label('brand', 'Brand') }}
                    {{ Form::select('brand', $brands, null, array('class' => 'form-control')) }}
                    
                    <br>

                    -or-
                    <br>

                    {{ Form::label('new_brand', 'Create a new brand')}}
                    {{ Form::text('new_brand', null, array('class' => 'form-control')) }}

                    <br>

                    {{ Form::label('name', 'Item name')}}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}

                    <br>

                    {{ Form::label('number', 'Item number')}}
                    {{ Form::text('number', null, array('class' => 'form-control')) }}

                    <br>

                    {{ Form::label('base_price', 'Base price')}}
                    {{ Form::text('base_price', null, array('class' => 'form-control')) }}

                    <br>

                    {!! Form::label ('image', 'Upload image') !!}
                    {!! Form::file('image', '', array('class' => 'form-control')) !!}
                    <div class="clearfix"></div>
                    <div class="col-md-offset-4 col-md-6 text-muted">
                    Recommended image dimensions: 400px x 400 px. 
                    Maximum image dimensions: 1000px x 1000px.
                    Maximum upload size: 500 KB.
                    File types: .jpg, .jpeg, .png, .bmp, .gif, .tiff.
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-check-circle"></i>Create item
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