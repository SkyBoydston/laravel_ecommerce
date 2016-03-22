@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Member site</div>

                <div class="panel-body">
                    @if (Auth::user()->company)
                        @if (Auth::user()->company->logo)
                            <img style="display:block;margin: 0 auto;" src="{{ url('/client_logo_files/') . '/' . Auth::user()->company->logo }}"/>
                        @endif
                    @endif
                    
                        <h1 style="text-align: center;">News/specials</h1>
                        <h1 style="text-align: center;">Promotions</h1>
                        <h1 style="text-align: center;">Webinars</h1>
                        <h1 style="text-align: center;">Financial</h1>
                        <h1 style="text-align: center;">Social media links</h1>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
