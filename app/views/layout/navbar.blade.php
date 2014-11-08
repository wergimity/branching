<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <ul class="nav navbar-nav">
            @if(Auth::check())
                <li>{{ link_to('/logout', 'Logout') }}</li>
            @else
                <li>{{ link_to_route('sessions.create', 'Login') }}</li>
            @endif
        </ul>
    </div>
</div>