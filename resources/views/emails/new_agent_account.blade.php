@extends('layouts.email')

@section('content')



Hello {{ ucfirst($request->first_name) }} {{ ucfirst($request->last_name) }},<br/>
<br/>
A new account has been created for you. This is just an account that allows you to see the "Agent" role's view of the application. First, follow the link below to set a password for your new account, then enjoy exploring the rest of the application. Remember, you can always log back out and click the logo in the application's top-left corner to start your tour over from the beginning.<br/>
<br/>

Visit here to activate your account:<br/>
<br/>
<a href="{{ $url }}">{{ $url }}</a><br/>
<br/>
If the link doesn't work then copy and paste it into your browser's address bar.<br/>






@endsection