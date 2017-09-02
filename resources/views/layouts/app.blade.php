<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('stylesheets')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ route('home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Examples <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('bar') }}">
                                            Bar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('line') }}">
                                            Line
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('donut') }}">
                                            Donut
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pie') }}">
                                            Pie
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('area') }}">
                                            Area
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('areaspline') }}">
                                            Areaspline
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('geo') }}">
                                            Geo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('percentage') }}">
                                            Percentage
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('progressbar') }}">
                                            Progressbar
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
