@extends('layouts.email')

@section('content')



Hello {{ ucfirst($request->first_name) }} {{ ucfirst($request->last_name) }},\n
\n
A new account has been created for you. This is just an account that allows you to see the "Agent" role's view of the application. First, go back to the application and log out of your current session. Then, follow the link below to set a password for your new account. Finally, enjoy exploring the rest of the application. Remember, you can always log back out and click the logo in the application's top-left corner to start your tour over.\n
\n

Visit here to activate your account:\n
\n
<a href="{{ $url }}">{{ $url }}</a>\n
\n
If the link doesn't work then copy and paste it into your browser's address bar.\n






@endsection