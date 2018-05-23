@extends('layouts.app')

@section('content')
    @section('scripts')        
            

        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    @stop
<section>
    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Cognoms" class="col-md-4 col-form-label text-md-right">{{ __('Cognoms') }}</label>

                            <div class="col-md-6">
                                <input id="Cognoms" type="text" class="form-control{{ $errors->has('Cognoms') ? ' is-invalid' : '' }}" name="Cognoms" value="{{ old('Cognoms') }}" required autofocus>

                                @if ($errors->has('Cognoms'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Cognoms') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="DataNaixement" class="col-md-4 col-form-label text-md-right">{{ __('Data de naixement') }}</label>

                            <div class="col-md-6">
                                <input id="DataNaixement" type="date" class="form-control{{ $errors->has('DataNaixement') ? ' is-invalid' : '' }}" name="DataNaixement" value="{{ old('DataNaixement') }}" required autofocus>

                                @if ($errors->has('DataNaixement'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('DataNaixement') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="PaisResidencia" class="col-md-4 col-form-label text-md-right">{{ __('País de residència') }}</label>

                            <div class="col-md-6">
                                <input id="PaisResidencia" type="text" class="form-control{{ $errors->has('PaisResidencia') ? ' is-invalid' : '' }}" name="PaisResidencia" value="{{ old('PaisResidencia') }}" required autofocus>

                                @if ($errors->has('PaisResidencia'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('PaisResidencia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contrasenya') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma contrasenya') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar-se') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
