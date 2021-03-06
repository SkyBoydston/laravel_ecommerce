@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Quote details</div>
                <div class="panel-body">
                    <h4>Quote number:</h4>
                    {{$quote->number}}<br>

                    <h4>Client reference:</h4>
                    {{$quote->client_reference}}<br>

                    <h4>Quote created on:</h4>
                    {{ date('M j, Y', strtotime($quote->created_at)) }} at {{ date('g:i a', strtotime($quote->created_at)) }}<br>

                    <h4>By:</h4>
                    {{ucfirst($quote->user->first_name)}} {{ucfirst($quote->user->last_name)}}<br>

	               <!--  <h4>Converted to retail quote:</h4>
                    @if($quote->converted_to_retail_quote != '0000-00-00 00:00:00')
                        Yes, on {{ date('M j, Y', strtotime($quote->converted_to_retail_quote)) }} at {{ date('g:i a', strtotime($quote->converted_to_retail_quote)) }}.
                    @else
                        No.
                    @endif -->

                    @if (Auth::user()->hasRole('admin'))
                        <h4>Organization notes:</h4>
                        @if (!$quote->user->hasRole('admin'))
                            {!! Form::textarea('notes', $quote->user->company->notes, array('class' => 'form-control', 'rows' => '4', 'disabled' => 'disabled', 'style' => 'cursor:default;')) !!}
                        @else
                            You are viewing an admin created quote.
                        @endif
                    @endif

                    <h4>Quote notes:</h4>
                    {!! Form::textarea('notes', $quote->notes, array('class' => 'form-control', 'rows' => '4', 'disabled' => 'disabled', 'style' => 'cursor:default;')) !!}
                    <br>
                    <a href="{{ url('quote') . '/' . $quote->id . '/edit' }}" class="btn btn-primary btn-xs">Edit quote details</a>
                    <a href="{{ url('quote') . '/' . $quote->id . '/edit?mark=approved' }}" class="btn btn-primary btn-xs">Approve</a>
                    <a href="{{ url('quote') . '/' . $quote->id . '/edit?mark=contact_requested' }}" class="btn btn-warning btn-xs">Request contact</a>

               		<h3>Item(s):</h3>

                    <div class="col-md-2"><strong>Image</strong></div>
                    <div class="col-md-2"><strong>Brand</strong></div>
                    <div class="col-md-2"><strong>Name</strong></div>
                    <div class="col-md-2"><strong>Quantity</strong></div>
                    <div class="col-md-2"><strong>Price each</strong></div>
                    <div class="col-md-2"><strong>Price total</strong></div>
                    @foreach ($quote->items as $item)
                        <a href="{{ url('item/' . $item->id) }}">
                            <div class="col-md-2">
                                <img src="{{ url('/client_item_image_files') . '/' }}{{ $item->image }}" style="width: auto;height: 70px;"/>
                            </div>
                            <div class="col-md-2">
                                {{ $item->brand }}
                            </div>
                            <div class="col-md-2">
                                {{ $item->name}}
                            </div>
                            <div class="col-md-2">
                                {{ Form::open(array('method' => 'POST', 'url' => 'decrease_quantity', 'style' => 'display:inline;')) }}
                                    {{ Form::hidden('item_id', $item->id) }}
                                    {{ Form::hidden('sale_document_id', $quote->id) }}
                                    {{ Form::hidden('current_quantity', $item->pivot->quantity) }}

                                    <button type="submit" class=" btn btn-primary btn-xs">
                                        <i class="fa  fa-minus-square"></i>
                                    </button>
                                {{ Form::close() }}
                                {{ $item->pivot->quantity }}
                                {{ Form::open(array('method' => 'POST', 'url' => 'increase_quantity', 'style' => 'display:inline;')) }}
                                    {{ Form::hidden('item_id', $item->id) }}
                                    {{ Form::hidden('sale_document_id', $quote->id) }}
                                    {{ Form::hidden('current_quantity', $item->pivot->quantity) }}

                                    <button type="submit" class=" btn btn-primary btn-xs">
                                        <i class="fa  fa-plus-square"></i>
                                    </button>
                                {{ Form::close() }}
                            </div>
                            <div class="col-md-2">
                                ${{ number_format($item->mod_price($quote->user->id, $quote->id), 2) }}
                            </div>
                            <div class="col-md-2">
                                ${{ number_format($item->mod_price($quote->user->id, $quote->id) * $item->pivot->quantity, 2) }}
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            
                        </a>
                    @endforeach
                        <div class="col-md-2"><strong></strong></div>
                        <div class="col-md-2"><strong></strong></div>
                        <div class="col-md-2"><strong></strong></div>
                        <div class="col-md-2"><strong></strong></div>
                        <div class="col-md-2"><strong>Grand total</strong></div>
                        <div class="col-md-2"><strong>{{ $quote->total($quote) }}</strong></div>

                	
                    <br><br>
                    <a href="{{ url('item/search_and_add_to_sale_document', ['sale_document_id' => $quote->id]) }}" class="btn btn-primary">Add an item</a>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection