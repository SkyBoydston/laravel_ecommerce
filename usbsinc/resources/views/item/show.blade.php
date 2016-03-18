@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Item details</div>
                <div class="panel-body">
                    <h4>These Option 1, 2, 3... correspond to and will be replaced by question text (brand, material, product line, etc.) and the numbers that appear directly under each option will be replaced by answer text.</h4>

                    @foreach ($item['attributes'] as $key => $value)
                        <h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> {{ $value }} <br/>

                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@endsection