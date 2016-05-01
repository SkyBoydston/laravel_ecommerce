@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All orders</div>
                <div class="panel-body">
                    @foreach ($orders as $order)
                        <a href="order/{{ $order->id }}">
                            Order number: {{ $order->number }} <br>
                            Converted to order: {{ $order->converted_to_order }} <br>
                            Shipped: {{ $order->shipped == '0000-00-00 00:00:00'? 'Not yet shipped': $order->shipped }} <br>
                            Est. arrival: {{ $order->estimated_arrival == '0000-00-00 00:00:00'? 'Not yet available': $order->estimated_arrival }} <br>
                        </a>
                        <hr>
                    @endforeach
                
				</div>
			</div>
		</div>
	</div>
</div>

@endsection