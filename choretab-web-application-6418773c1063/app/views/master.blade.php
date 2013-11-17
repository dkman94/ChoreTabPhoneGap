<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{{ $pageTitle }}} | ChoreTab</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @section('styles')
        @show
    </head>
    <body>
        <div class="header">
            <h1>ChoreTab</h1>

            <ul>
                @if (Auth::check())
                    <li>{{ HTML::link('user', 'Dashboard') }}</li>
                    <li>{{ HTML::link('auth/logout', 'Logout') }}</li>
                @else
                    <li>{{ HTML::link('/', 'Home') }}</li>
                    <li>{{ HTML::link('auth/login', 'Login') }}</li>
                    <li>{{ HTML::link('auth/register', 'Register') }}</li>
                @endif
            </ul>

            <hr>
        </div>
        @yield('content')
   
        @section('scripts')
            <script type="text/javascript">var BASE_URL = "{{ URL::to('/'); }}/";</script>
        @show
    </body>
</html>

