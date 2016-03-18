@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Retail Quote details</div>
                <div class="panel-body">
	                @foreach ($retail_quote['attributes'] as $key => $value)
                		<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>

                	@endforeach

               		<h3>Item(s):</h3>
                	@foreach ($retail_quote->items as $item)
                		<a href="{{url('/item', [$item->id]) }}"> {{ $item->number }} </a><br>
                	@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@endsection