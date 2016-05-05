@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

           
                <div class="sleek">
                    <h1>That's it!</h1>

                    <h2>This area is shown just to illustrate where one of the applications endpoints would be. This is where you would ordinarily create an integration to a third-party software such as an ERP and CRM. From here, use the button below to go back and continue exploring the application.</h2><br>

                    <br>
                    <a href="{{ url('order') . '/' . $id }}" class="btn btn-primary">Go back</a>
                    
                </div>
            
            
        </div>
    </div>
</div>
@endsection

