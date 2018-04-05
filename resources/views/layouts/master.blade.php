<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        <link rel="icon" type="image/png" href="{{ URL::asset('./images/favicon.png') }}" />
        <title>@yield('titlePage')</title>
    </head>
    <body>
        <!--<header style="border: 1px solid black; width: 100%; height: 10%;">
            <div class="container">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#"></a>
                        </div>
                        <ul class="nav navbar-nav"><!--
                            <li><a href="{{url('/')}}">Principal</a></li>
                            <li><a href="{{url('/llibres')}}">Llibres</a></li>
                            <li><a href="{{url('/temes')}}">Temes</a></li>
                            <li><a href="{{url('/llibres/crea')}}">Crear llibre</a></li>
                            <li><a href="{{url('/llibres/esborra')}}">Esborrar llibre</a></li>
                            <li><a href="{{url('/llibres/modifica')}}">Modificar llibre</a></li>
                            <li><a href="{{url('/temes/crea')}}">Crear tema</a></li>
                            <li><a href="{{url('/temes/esborra')}}">Esborrar tema</a></li>
                            <li><a href="{{url('/temes/modifica')}}">Modificar tema</a></li>
                    </ul>
                    </div>
                </nav>
            </div>-->
            @yield('header')
        </header>
        <section id="benvinguda">
            @yield('content')
        </section>

        <footer>
            @yield('footer')
        </footer>            
    </body>
</html>

