@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            

            <div class="panel panel-default">
                <div class="panel-heading">Edit member site</div>

                <div class="panel-body">
                    {{ Form::open(array('url' => '/member_cover')) }}

                    {{ Form::close() }}

                </div>
            </div>



            <div class="panel panel-default">
                <div class="panel-heading">Member site</div>

                <div class="panel-body">
                    
                    
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

