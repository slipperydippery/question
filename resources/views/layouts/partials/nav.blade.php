<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="/">Vragenlijsten</a></h1>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>

    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            <li class="has-dropdown">
                <a href="#">Vragenlijsten</a>
                <ul class="dropdown">
                    <li> <a href=" {{ URL::route('quests.index')}} "> Alle Vragenlijsten </a> </li>
                    <li> <a href=" {{ URL::route('templates.index')}} "> Alle Templates </a> </li>
                </ul>
            </li>
            @if(!Auth::guest())
                <li class="active">
                    <a href="#">
                        {{ Auth::user()->name }}
                    </a>
                </li>
            @endif
            @if(Auth::guest())  
                <li class="has-dropdown">
                    <a href="#">Authentication</a>
                    <ul class="dropdown">
                            <li><a href="{{ url('/register') }}">Register</a></li>
                            <li><a href="{{ url('/login') }}">Login</a></li>
                    </ul>
                </li>
            @else
                <li><a href="{{ url('/logout') }}">Logout</a></li>
            @endif
        </ul>
    </section>
</nav>
