@extends('layouts.app')

    @section('titlePage')
        Accedir
    @stop

@section('content')

    @section('scripts')
      <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{{ asset('assets/css/form-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

          <!-- Bootstrap core CSS -->

    <!-- Custom fonts for this template -->

    <!-- Plugin CSS -->

    <!-- Custom styles for this template -->
        <link href="{{ asset('css/new-age.min.css') }}" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for this template -->
        <script src="{{ asset('js/new-age.min.js') }}"></script>

    @stop

    @section('content')
      <div id="app">
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Accedeix a Pulmentum</h3>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-key"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="{{ route('login') }}" method="POST" class="login-form">
                                        @csrf
                                        <div class="form-group">
                                            <label class="sr-only" for="email">{{ __('E-Mail Address') }}</label>
                                            <input type="email" name="email" placeholder="Correu electrònic" class="form-username form-control{{ $errors->login->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" id="form-username" required autofocus>

                                            @if ($errors->login->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->login->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="password">{{ __('Password') }}</label>
                                            <input type="password" name="password" placeholder="Contrassenya" class="form-password form-control{{ $errors->login->has('password') ? ' is-invalid' : '' }}" id="form-password" required>
                                            @if ($errors->login->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->login->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>

                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                           <div class="social-login">
                                <h3>També pots entrar amb:</h3>
                                <div class="social-login-buttons">
                                    <button type="" id="githubgray" class="btn btn-link-1  btn-link-1-github " onclick="location.href=`{{ url('login/github') }}`">
                                        <i class="fa fa-github "></i> Github
                                    </button>
                                     <button type="" class="btn btn-link-1 btn-link-1-twitter" onclick="location.href=`{{ url('login/twitter') }}`">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </button>
                                  <a class="btn btn-link-1 btn-link-1-google-plus" onclick="location.href=`{{ url('login/google') }}`">
                                        <i class="fa fa-google-plus"></i> Google Plus
                                </a>
                                </div>
                            </div>
                        </div>
                       <div class="col-sm-1 middle-border"></div>
                       <div class="col-sm-1"></div>
                        <div class="col-sm-5">
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Registra't a Pulmentum</h3>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form action="{{ route('register') }}" method="POST" class="registration-form">
                                        @csrf
                                        <div class="form-group">
                                            <label class="sr-only" for="name">{{ __('Nom') }}</label>
                                            <input type="text"  name="name" placeholder="Nom" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" id="name" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">{{ __('Cognoms') }}</label>
                                            <input type="text"  placeholder="Cognom" class="form-control{{ $errors->has('Cognoms') ? ' is-invalid' : '' }}" name="Cognoms" id="Cognoms" value="{{ old('Cognoms') }}" required autofocus>
                                            @if ($errors->has('Cognoms'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('Cognoms') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="DataNaixement">{{ __('Data de naixement') }}</label>
                                            <input type="date" name="DataNaixement" placeholder="Data neixement" class="form-email form-control{{ $errors->has('DataNaixement') ? ' is-invalid' : '' }}" id="DataNaixement" value="{{ old('DataNaixement') }}" required autofocus>
                                            @if ($errors->has('DataNaixement'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('DataNaixement') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="PaisResidencia">{{ __('País de residència') }}</label>
                                            <input type="text" placeholder="País de residència" class="form-control{{ $errors->has('PaisResidencia') ? ' is-invalid' : '' }}" name="PaisResidencia" value="{{ old('PaisResidencia') }}" required autofocus id="PaisResidencia">
                                            @if ($errors->has('PaisResidencia'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('PaisResidencia') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="email">{{ __('E-Mail') }}</label>
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Correu electrònic">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="password">{{ __('Contrasenya') }}</label>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contrassenya" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="password-confirm">{{ __('Confirma contrasenya') }}</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Repeteix la contrassenya">
                                        </div>
                                        <button type="submit" class="btn">{{ __('Registrar-se') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
@stop