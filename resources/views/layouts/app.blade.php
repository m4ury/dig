<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DIG') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/inputmask.css') }}" rel="stylesheet">


    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Dig') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <a class="dropdown-item" href="{{ route('paciente.index') }}">
                                        Pacientes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('familia.index') }}">
                                        Familias
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if(session()->has('info'))
                <div id="alert" class="alert alert-success text-center"><strong>{{ session('info') }}</strong></div>
            @elseif(session()->has('danger'))
                <div id="alert" class="alert alert-danger text-center"><strong>{{ session('danger') }}</strong></div>
            @endif
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.inputmask.bundle.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/test.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('#alert').delay(2000).slideUp(200, function(){
                $(this).remove();
            });
        }, 5000);
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('button#delete').click(function(e) {
                if (confirm('Seguro desea eliminar este registro?')) {
                    return;
                }
                e.stopImmediatePropagation();
                e.preventDefault();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('td#edad').val(function () {
                var fechaActual = new Date();
                var fechaNac = $('#fechaNacimiento').text();

                console.log(fechaActual.getFullYear());
                console.log(fechaNac);

            })
        });
    </script>
</body>
</html>
