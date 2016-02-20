@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}
                        <p class="help-block">Business Details</p>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Business name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="business_name" value="{{ old('business_name') }}">

                                @if ($errors->has('business_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('business_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('business_type') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Business type</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="business_type" value="{{ old('business_type') }}">

                                @if ($errors->has('business_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('business_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('business_status') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Business status</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="business_status" value="{{ old('business_status') }}">

                                @if ($errors->has('business_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('business_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('business_address') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Business address</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="business_address" value="{{ old('business_address') }}">

                                @if ($errors->has('business_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('business_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="city" value="{{ old('city') }}">

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">State</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="state" value="{{ old('state') }}">

                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('zip_code') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Zip code</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="zip_code" value="{{ old('zip_code') }}">

                                @if ($errors->has('zip_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zip_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('brands_of_interest') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Brands of interest</label>

                            <div class="col-md-6">
                                <input type="checkbox" class="form-control" name="brands_of_interest" value="company1" >Company 1<br>
                                <input type="checkbox" class="form-control" name="brands_of_interest" value="company2" >Company 2<br>

                                @if ($errors->has('brands_of_interest'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brands_of_interest') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <p class="help-block">Contact Details</p>


                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">First name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Last name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input type="title" class="form-control" name="title" value="{{ old('title') }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('primary_phone') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Primary phone</label>

                            <div class="col-md-6">
                                <input type="primary_phone" class="form-control" name="primary_phone" value="{{ old('primary_phone') }}">

                                @if ($errors->has('primary_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('primary_phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('secondary_phone') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Secondary phone</label>

                            <div class="col-md-6">
                                <input type="secondary_phone" class="form-control" name="secondary_phone" value="{{ old('secondary_phone') }}">

                                @if ($errors->has('secondary_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('secondary_phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('contact_me_via') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Contact me via</label>

                            <div class="col-md-6">
                                <input type="radio" name="contact_me_via" class="form-control" value="phone" checked> Phone<br>
                                <input type="radio" name="contact_me_via" class="form-control" value="email" > Email<br>

                                @if ($errors->has('contact_me_via'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_me_via') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('how_heard_about') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">How did you hear about us?</label>

                            <div class="col-md-6">
                                <textarea rows="5" name="how_heard_about" class="form-control" value="" ></textarea>

                                @if ($errors->has('how_heard_about'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('how_heard_about') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
