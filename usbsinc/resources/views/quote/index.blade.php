@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All quotes</div>
                <div class="panel-body">
	                @foreach ($quotes as $quote)
	                	<a href="quote/{{ $quote->id }}">Quote number: {{ $quote->number }} </a><br><hr>

	                @endforeach

				</div>
			</div>
		</div>
	</div>
</div>

@endsection