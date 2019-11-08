<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ trans('layout.laravel_quickStart') }}</title>
    <!-- Styles -->
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/fontawesome/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/fontawesome/css/solid.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}" ></script>
    <script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('bower_components/popper.js/dist/umd/popper.js') }}"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar-expand-sm col-sm-6" style="background: gainsboro">
            <p class="navbar-brand" >{{ trans('layout.task_list') }}</p>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    <br>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>

