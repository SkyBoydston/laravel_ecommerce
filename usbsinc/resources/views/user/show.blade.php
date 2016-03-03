@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User details</div>
                <div class="panel-body">
					
					@foreach ($user['attributes'] as $key => $value)
						<h4>{{ ucfirst(str_replace('_', ' ', $key)) }}</h4> <br/>{{ $value }} <br/><br/>
					@endforeach


					
					<a href="{{ env('DOC_ROOT') . "/user/" . $id . "/edit" }}">Edit</a>

				</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection