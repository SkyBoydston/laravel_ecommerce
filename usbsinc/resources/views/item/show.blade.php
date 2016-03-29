@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Item details</div>
                <div class="panel-body">
                    

                    @foreach ($item['attributes'] as $key => $value)
                        <h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>
                    @endforeach
                    <a href="{{ url('item') . '/' . $item->id . '/edit' }}">Edit</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection