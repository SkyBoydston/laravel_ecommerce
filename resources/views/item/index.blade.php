@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (Auth::user()->hasRole('admin'))
                <a href="{{ url('item/create') }}" class="btn btn-primary">Add a new item</a><br><br>
            @endif
            
            <div class="panel panel-default">
                <div class="panel-heading">All items</div>
                <div class="panel-body">
                    
                    <div class="col-md-2"><strong>Image</strong></div>
                    <div class="col-md-2"><strong>Category</strong></div>
                    <div class="col-md-2"><strong>Brand</strong></div>
                    <div class="col-md-2"><strong>Name</strong></div>
                    <div class="col-md-2"><strong>Number</strong></div>
                    <div class="col-md-2"><strong>Base price</strong></div>
                    <div class="clearfix"></div><br>

                    @foreach ($items as $item)

                        <a href="{{ url('item/' . $item->id) }}">
                    
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
                                ${{ number_format($item->mod_price(Auth::user()->id), 2) }}
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            
                        </a>

                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@endsection