@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        	<a href="{{ url('quote/create') }}" class="btn btn-primary">Start new quote</a><br><br>

            <div class="panel panel-default">
                <div class="panel-heading">All quotes</div>
                <div class="panel-body">

                	<div class="col-md-2"><strong>Submission date</strong></div>
                    <div class="col-md-2"><strong>Org. name</strong></div>
                    <div class="col-md-2"><strong>Client reference</strong></div>
                    <div class="col-md-2"><strong>Quote status</strong></div>
                    <div class="col-md-2"><strong>Quote number</strong></div>
                    <div class="col-md-2"><strong>Quote value</strong></div>
                    <div class="clearfix"></div><br>

                    @if (count($quotes))
                        @foreach ($quotes as $quote)

                            <a href="{{ url('quote/' . $quote->id) }}">

                                <div class="col-md-2">
                                    {{ date('m-d-Y', strtotime($quote->created_at)) }}
                                </div>
                                <div class="col-md-2">
                                    @if (!$quote->user->hasRole('admin'))
                                        {{ $quote->user->company()->first()->business_name }}
                                    @else 
                                        Admin created
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    {{ $quote->client_reference }}
                                </div>
                                <div class="col-md-2">
                                	{{ $quote->status($quote) }}
                                </div>
                                <div class="col-md-2">
                                    {{ $quote->number }}
                                </div>
                                <div class="col-md-2">
                                    {{ $quote->total($quote) }}
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