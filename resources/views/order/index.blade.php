@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">All orders</div>
                <div class="panel-body">

                    <div class="col-md-3"><strong>Order number</strong></div>
                    <div class="col-md-3"><strong>Converted to order</strong></div>
                    <div class="col-md-3"><strong>Shipped</strong></div>
                    <div class="col-md-3"><strong>Estimated arrival</strong></div>
                    <div class="clearfix"></div><br>

                    @if (count($orders))
                        @foreach ($orders as $order)

                            <a href="order/{{ $order->id }}">

                                <div class="col-md-3">
                                    {{ $order->number }}
                                </div>
                                <div class="col-md-3">
                                    {{ date('m-d-Y', strtotime($order->converted_to_order)) }}
                                    
                                </div>
                                <div class="col-md-3">
                                    {{ $order->shipped == '0000-00-00 00:00:00'? 'Not yet shipped': date('m-d-Y', strtotime($order->shipped)) }}
                                </div>
                                <div class="col-md-3">
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