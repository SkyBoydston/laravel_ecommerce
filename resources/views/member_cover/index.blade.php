@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            @if (Auth::user()->hasRole('admin'))
                <div class="sleek">
                    <h1>Well done!</h1>

                    <h2>You are logged in as an adminstrator. Now that you're into the system, explore to find out what kind of features this application offers. Take special note of these three:</h2>
                    <ul>
                        <li>
                            <h3>Click the link at the top of the page, "Quotes," and click the button at the top of the page to create a new quote. Add new items to the quote through the interface by searching for any term in an item's description.</h3>
                        </li>
                        <li>
                            <h3>Click the "Clients" link at the top of the page and explore information about users with the "Organization" role. You can add and edit information for them.</h3>
                        </li>
                        <li>
                            <h3>Finally, notice that in an organization's profile, there's a tab for "Agents." Explore this area and see how the system works when you try adding yourself as an agent with an email address you own. Notice the advanced authorization features.</h3>
                        </li>
                    </ul>
                </div>
            @endif

            @if (Auth::user()->hasRole('agent'))
                <div class="sleek">
                    <h1>Welcome back!</h1>

                    <h2>You are now logged in as an agent. From here you can explore what options the "Agent" role has. Notice that your ability to perform some actions, such as edit the company address, has been restricted while other abilities, such as input a phone number for yourself, have been added. An extra menu ability is available now, "Profile," under the drop-down menu in the upper-right corner.</h2>
                    
                    <h2>Once you've finished exploring, log out and enjoy the rest of the portfolio. Thank you for visiting!</h2>
                </div>
            @endif
            
        </div>
    </div>
</div>
@endsection

