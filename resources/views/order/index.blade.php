@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">All orders</div>
                <div class="panel-body">

                    <div class="col-md-2"><strong>Converted to order</strong></div>
                    <div class="col-md-2"><strong>Order number</strong></div>
                    <div class="col-md-2"><strong>Org. name</strong></div>
                    <div class="col-md-2"><strong>Client reference</strong></div>
                    <div class="col-md-2"><strong>Shipping date</strong></div>
                    <div class="col-md-2"><strong>Estimated arrival</strong></div>
                    <div class="clearfix"></div><br>

                    @if (count($orders))
                        @foreach ($orders as $order)

                            <a href="order/{{ $order->id }}">

                                <div class="col-md-2">
                                    {{ date('m-d-Y', strtotime($order->converted_to_order)) }}
                                    
                                </div>
                                <div class="col-md-2">
                                    {{ $order->number }}
                                </div>
                                <div class="col-md-2">
                                    @if (!$order->user->hasRole('admin'))
                                        {{ $order->user->company()->first()->business_name }}
                                    @else 
                                        Admin created
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    {{ $order->client_reference }}
                                </div>
                                <div class="col-md-2">
                                    {{ $order->estimated_shipping_date == '0000-00-00 00:00:00'? 'Not yet shipped': date('m-d-Y', strtotime($order->estimated_shipping_date)) }}
                                </div>
                                <div class="col-md-2">
                                    {{ $order->estimated_arrival == '0000-00-00 00:00:00'? 'Not yet available': date('m-d-Y', strtotime($order->estimated_arrival)) }}
                                </div>
                                
                                <div class="clearfix"></div>
                                <hr>
                                
                            </a>

                        @endforeach
                    @else
                        No orders.
                    @endif
                        
                    
                </div>


                
			</div>
		</div>
	</div>
</div>

@endsection