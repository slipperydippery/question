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
            <li class="active">
                <a href="#">
                    User Profile
                </a>
            </li>
            <li class="has-dropdown">
                <a href="#">Questionnaires</a>
                <ul class="dropdown">
                    <li> <a href=" {{ URL::route('quests.index')}} "> List Questionnaire </a> </li>
                    <li> <a href=" {{ URL::route('quests.create')}} "> Create Questionnaire </a> </li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#">Questionnaires</a>
                <ul class="dropdown">
                    <li> <a href=" {{ URL::route('quests.create')}} "> Create Questionnaire </a> </li>
                    <li> <a href=" {{ URL::route('quests.index')}} "> List Questionnaire </a> </li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#">Authentication</a>
                <ul class="dropdown">
                    <li><a href="{{ url('/register') }}">Register</a></li>
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </section>
</nav>
