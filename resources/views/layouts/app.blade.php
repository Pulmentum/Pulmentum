<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>@yield('titlePage')</title>

        <!-- Bootstrap core CSS -->
            <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom fonts for this template -->
            <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
            <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}">
            <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

        <!-- Plugin CSS -->
            <link rel="stylesheet" href="{{ asset('device-mockups/device-mockups.min.css') }}">

        <!-- Custom styles for this template -->
            <link href="{{ asset('css/new-age.min.css') }}" rel="stylesheet">

        <!-- Bootstrap core JavaScript -->
            <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Plugin JavaScript -->
            <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for this template -->
            <script src="{{ asset('js/new-age.min.js') }}"></script>
            <style type="text/css">
        
                #busca{
                    background-image: url("{{ asset('storage/images/icons/search.svg') }}");
                    background-repeat: no-repeat;
                    background-size: 75%;
                    background-position: center;
                    border-radius: 5px;
                    width: 8%;
                }

            </style>
            <script type="text/javascript">
            
                $(document).ready(function(){
                    $('#callajax').on('keyup', 'input', function() {
                        var data = $(this).val();
                        $.post("{{ asset('storage/files/cerca.php') }}",{data:data},function(value){
                            $('#desplegable').html(value);
                        });
                    });
                    $('#busca').click(function(){
                        var url = $('#cercador').val();
                        url = $('option').val(url).attr('id'); 
                        window.location.pathname = '/Pulmentum_v2/public/' + url;         
                    });
                });     

            </script>
    @yield('scripts')
    </head>

    <body id="page-top">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: white;">
            <div class="container">
                <a class="navbar-brand" @guest href="{{ url('/') }}" @else href="{{ url('/home') }}" @endguest>
                    Pulmentum
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth
                        <div class="navbar-nav mr-auto" id="callajax" style="width:55%;display:flex; flex-direction:row;">
                            <input list="desplegable" id="cercador" class="form-control" placeholder="Cerca cursos" style="margin-right:1%; width:55%;"/>
                            <datalist id="desplegable"></datalist>
                            <button class="btn btn-default" id="busca" style="color:rgb(221,221,221);"></button>
                        </div>
                    @endauth 
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="display:flex; align-items:center;width:35%;justify-content:space-around;">
                        @auth
                        <li style="width:60%;"><a class="nav-link" href="{{ asset('curs') }}"><img src="{{ asset('storage/images/icons/chalkboard-teacher.svg') }}" width="30"/> Cursos </a></li>
                        @else
                        <li><a class="nav-link" href="{{ asset('curs') }}"><img src="{{ asset('storage/images/icons/chalkboard-teacher.svg') }}" width="30"/> Cursos </a></li>
                        @endauth
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}"><img src="{{ asset('storage/images/icons/sign-in-alt.svg') }}" width="30"/> {{ __('Accedir') }} </a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @auth
                                    <img src="{{ asset('storage/images/profile/user.svg') }}" style="width:20%;"/> {{ Auth::user()->name }} <span class="caret"></span>
                                    @else
                                    <img src="{{ asset('storage/images/profile/user.svg') }}" style="width:10%;"/> {{ Auth::user()->name }} <span class="caret"></span>
                                    @endauth
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ asset('usuari/'.Auth::user()->idUsuari) }}">
                                        {{ __('Perfil') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Desconnectar-se') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <a class="nav-link" href="{{ route('language', ['lang' => 'en']) }}">EN</a>
                        <a class="nav-link" href="{{ route('language', ['lang' => 'es']) }}">ES</a>
                        <a class="nav-link" href="{{ route('language', ['lang' => 'ca']) }}">CA</a>
                    </ul>
                </div>
            </div>
        </nav>

            @yield('content')

        <footer>
            <div class="container">
                <p>&copy; Pulmentum Company</p>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#">Privacitat</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Termes i condicions</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">FAQs</a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</html>