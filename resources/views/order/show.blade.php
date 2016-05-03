@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Order details</div>
                <div class="panel-body">
                    <h4>Order number:</h4>
                    {{$order->number}}<br>

                    <h4>Client reference:</h4>
                    {{$order->client_reference}}<br>

                    <h4>Order created on:</h4>
                    {{ date('M j, Y', strtotime($order->created_at)) }} at {{ date('g:i a', strtotime($order->created_at)) }}<br>

                    <h4>By:</h4>
                    {{ucfirst($order->user->first_name)}} {{ucfirst($order->user->last_name)}}<br>

                    <!-- <h4>Converted to retail order:</h4>
                    @if($order->converted_to_retail_order != '0000-00-00 00:00:00')
                        Yes, on {{ date('M j, Y', strtotime($order->converted_to_retail_order)) }} at {{ date('g:i a', strtotime($order->converted_to_retail_order)) }}.
                    @else
                        No.
                    @endif -->

                    @if (Auth::user()->hasRole('admin'))
                        <h4>Organization notes:</h4>
                        @if (!$order->user->hasRole('admin'))
                            {!! Form::textarea('notes', $order->user->company->notes, array('class' => 'form-control', 'rows' => '4', 'disabled' => 'disabled', 'style' => 'cursor:default;')) !!}
                        @else
                            You are viewing an admin created order.
                        @endif
                    @endif

                    <h4>Order notes:</h4>
                    {!! Form::textarea('notes', $order->notes, array('class' => 'form-control', 'rows' => '4', 'disabled' => 'disabled', 'style' => 'cursor:default;')) !!}
                    <br>
                    <a href="{{ url('order') . '/' . $order->id . '/edit?mark=revert' }}" class="btn btn-primary btn-xs">Revert to quote</a>


                    <input type="text" class="form-control datepicker">


                    <a href="" class="btn btn-primary btn-xs">Set shipping date</a>
                    <a href="" class="btn btn-primary btn-xs">Set est. arrival date</a>

                    <h3>Item(s):</h3>

                    <div class="col-md-2"><strong>Image</strong></div>
                    <div class="col-md-2"><strong>Brand</strong></div>
                    <div class="col-md-2"><strong>Name</strong></div>
                    <div class="col-md-2"><strong>Quantity</strong></div>
                    <div class="col-md-2"><strong>Price each</strong></div>
                    <div class="col-md-2"><strong>Price total</strong></div>
                    @foreach ($order->items as $item)
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
                                {{ $item->pivot->quantity }}
                            </div>
                            <div class="col-md-2">
                                ${{ number_format($item->mod_price($order->user->id, $order->id), 2) }}
                            </div>
                            <div class="col-md-2">
                                ${{ number_format($item->mod_price($order->user->id, $order->id) * $item->pivot->quantity, 2) }}
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
                    <div class="col-md-2"><strong>{{ $order->total($order) }}</strong></div>
                    <div class="clearfix"></div>

                    <br>
                    <br>
                    <div class="col-md-10"></div>
                    <div class="col-md-2">
                        <a href="{{ url('order') . '/' . $order->id . '/edit?mark=contact_requested' }}" class="btn btn-primary">Finalize order</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection