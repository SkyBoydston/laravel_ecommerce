@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add item to quote</div>
                <div class="panel-body">
                    <div class="panel-heading">Matches</div>
                    <div class="panel-body">
	                    {{Form::open(['method' => 'GET'])}}
		                    {{Form::input('search', 'q', null, ['placeholder' => 'Search...'])}}
	                    {{Form::close()}}

                        <div class="col-md-2"><strong>Image</strong></div>
                        <div class="col-md-2"><strong>Category</strong></div>
                        <div class="col-md-2"><strong>Brand</strong></div>
                        <div class="col-md-2"><strong>Name</strong></div>
                        <div class="col-md-2"><strong>Number</strong></div>
                        <div class="col-md-2"><strong>Base price</strong></div>
                        @if(count($items))
	                        @foreach ($items as $item)
	                            <a href="{{ url('item/add_item_to_sale_document', ['sale_document_id' => $sale_document_id, 'item_id' => $item->id]) }}">
	                                <div class="col-md-2">
	                                    <img src="{{ url('/client_item_image_files') . '/' }}{{ $item->image }}" style="width: auto;height: 70px;"/>
	                                </div>
	                                <div class="col-md-2">
	                                    {{ $item->category }}
	                                </div>
	                                <div class="col-md-2">
	                                    {{ $item->brand }}
	                                </div>
	                                <div class="col-md-2">
	                                    {{ $item->name}}
	                                </div>
	                                <div class="col-md-2">
	                                    {{ $item->number }}
	                                </div>
	                                <div class="col-md-2">
	                                    ${{ number_format($item->base_price, 2) }}
	                                </div>
	                                <div class="clearfix"></div>
	                                <hr>
	                                
	                            </a>

	                        @endforeach
	                    @else
	                    	No items matched your search.
	                    @endif
    				</div>

                </div>
			</div>
		</div>
	</div>
</div>

@endsection