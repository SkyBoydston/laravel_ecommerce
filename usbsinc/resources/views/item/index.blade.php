@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All items</div>
                <div class="panel-body">

                    @foreach ($items as $item)
                        <a href="{{ url('item/' . $item->id) }}">
                            <h4>Item number: </h4> {{ $item->number }} <br/>
                        </a>

                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@endsection