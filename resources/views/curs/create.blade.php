@extends('layouts.app')
@section('titlePage')
Crea un curs
@stop
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
<div class="container">
    {!! Form::open(array('url' => '/curs', 'method' => 'POST')) !!}
    <h3>Nou</h3><br>
    <div class="form-group">
        {!! Form::label('NomCurs', 'Nom del curs') !!}
        <div class="form-controls">
            {!! Form::text('NomCurs', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('nTipus', 'Tipus') !!}
        <div class="form-controls">
            {{ Form::select('nomTipus', ['Llenguatge', 'Framework', 'API', 'Llibreria', 'SDK', 'Pluggin', 'Altre'], null, ['class' => 'form-control', 'id' => 'selTipus']) }}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('NomLlenguatge', 'Nom del Llenguatge', ['id' => 'nTipus']) !!}
        <div class="form-controls">
            {!! Form::text('NomLlenguatge', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('Nivell', 'Nivell') !!}
        <div class="form-controls">
            {{ Form::select('Nivell', ['Principiant', 'Intermig', 'Avançat'], null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('Preu', 'Preu') !!}
        <div class="form-controls">
            {!! Form::number('Preu', null, ['class' => 'form-control', 'step' => '0.01']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('Idioma', 'Idioma') !!}
        <div class="form-controls">
            {{ Form::select('Idioma', ['Català', 'Castellà', 'Anglès'], null, ['class' => 'form-control']) }}
        </div>
    </div>
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>
@stop
@section('footer')
    <h3>Pulmentum</h3>
@stop
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">

        $(document).on('change', '#selTipus', function(){
            var e = document.getElementById("selTipus");
            var selvalue = e.options[e.selectedIndex].value;
            var label;
            switch(selvalue){
                case '0': label = 'Nom del Llenguatge' ;break;
                case '1': label = 'Nom del Framework' ;break;
                case '2': label = "Nom de l'API" ;break;
                case '3': label = 'Nom de la Llibreria' ;break;
                case '4': label = 'Nom del SDK' ;break;
                case '5': label = 'Nom del Pluggin' ;break;
                case '6': label = 'Especifica el nom' ;break;
                default: break;
            }
            $('#nTipus').html(label);
        });

</script>