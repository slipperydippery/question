@include('layouts.partials.header')
<main>
    <div id="wrapper">
        @include('layouts.partials.nav')


        <div id="content">

            @if(Session::has('global'))
                {{ Session::get('global') }}
            @endif

            @yield('content')
        </div>

    </div> <!-- #wrapper -->
</main>

@include('layouts.partials.footer')
