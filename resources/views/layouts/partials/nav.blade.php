<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="/">Quests</a></h1>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>

    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            @if(!Auth::guest())
                <li class="active">
                    <a href="#">
                        {{ Auth::user()->name }}
                    </a>
                </li>
            @endif
            <li class="has-dropdown">
                <a href="#">Questionnaires</a>
                <ul class="dropdown">
                    <li> <a href=" {{ URL::route('quests.index')}} "> List Questionnaires </a> </li>
                    <li> <a href=" {{ URL::route('quests.create')}} "> Create Questionnaire </a> </li>
                    <li> <a href=" {{ URL::route('templates.index')}} "> List Question Templates </a> </li>
                    <li> <a href=" {{ URL::route('templates.create')}} "> Create Question Template </a> </li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#">Authentication</a>
                <ul class="dropdown">
                    @if(Auth::guest())  
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                    @endif
                </ul>
            </li>
        </ul>
    </section>
</nav>
