@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Item details</div>
                <div class="panel-body">
                    

                   

                    <img src="{{ url('/client_item_image_files') . '/' }}{{ $item->image }}" style="width: auto;height: 170px;margin:0 auto"/>
                    

                    <h4>Category</h4>
                    {{ $item->category }}

                    <h4>Brand</h4>
                    {{ $item->brand }}

                    <h4>Name</h4>
                    {{ $item->name }}

                    <h4>Item number</h4>
                    {{ $item->number }}

                    <h4>Base price</h4>
                    ${{ number_format($item->base_price, 2) }}

                    <div class="clearfix"></div><hr>

                    <a href="{{ url('item') . '/' . $item->id . '/edit' }}" class="btn btn-primary">Edit</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection