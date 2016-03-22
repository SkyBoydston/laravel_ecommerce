@extends('layouts.email')

@section('content')


Hello {{ ucfirst($request->first_name) }} {{ ucfirst($request->last_name) }},

A new account has been created for you. This message will need to be updated before launch to make sure that it has the right content.

Fill these in:
You can log in at...
Your email for login is...
Your password is...




@endsection