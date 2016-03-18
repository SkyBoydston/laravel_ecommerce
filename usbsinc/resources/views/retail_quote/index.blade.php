@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All retail quotes</div>
                <div class="panel-body">
	                @foreach ($retail_quotes as $retail_quote)
	                	<a href="retail_quote/{{ $retail_quote->id }}">Retail Quote number: {{ $retail_quote->number }} </a><br>

	                @endforeach

				</div>
			</div>
		</div>
	</div>
</div>

@endsection