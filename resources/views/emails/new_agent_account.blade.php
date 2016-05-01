@extends('layouts.email')

@section('content')



Hello {{ ucfirst($request->first_name) }} {{ ucfirst($request->last_name) }},

A new account has been created for you. This message will need to be updated before launch to make sure that it has the right content.


Visit here to activate your account:

<a href="{{ $url }}">{{ $url }}</a>

If the link doesn't work then copy and paste it into your browser's address bar.

Fill these in:
You can log in at...
Your email for login is...
Your password is...




@endsection