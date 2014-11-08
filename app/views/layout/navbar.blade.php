<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <ul class="nav navbar-nav">
            @if(Auth::check())
                <li>
                    <span class="navbar-text">
                        Logged in as:
                        <strong>
                            {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                        </strong>
                    </span>
                </li>
                <li>{{ link_to('/logout', 'Logout') }}</li>
            @else
                <li>{{ link_to_route('sessions.create', 'Login') }}</li>
            @endif
        </ul>
    </div>
</div>