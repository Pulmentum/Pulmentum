@extends('layouts.master')
@section('titlePage')
Perfil
@stop
@section('header')
    
@stop
@section('content')
    <div class="container">
        <h2>De moment no està creada, en teoria aquí hi va l'interfície on es mostra la configuració de l'usuari i l'hi permet modificar-la.</span></h2>
    </div>
@stop
@section('footer')
    <div id="container-footer">
        <div id="col1">
            <p>Exemple text 1</p>
        </div>
        <div id="col2">
            <a href="#">Lorem Ipsum Dolor 1</a><br>
            <a href="#">Lorem Ipsum Dolor 2</a><br>
            <a href="#">Lorem Ipsum Dolor 3</a><br>
        </div> 
        <div id="col3">
            <p>Exemple text 2</p>
        </div>  
    </div>
    <div id="colbot">
        <p>Lorem Ipsum Dolor</p>
    </div>
@stop

<!--@extends('layouts.master')                              ESPECIFICAR 'usuari/{id}' A L'URL DE L'ACTION DEL FORM
@section('titlePage')
Modifica
@stop
@section('header')
    <h2>Modifica un registre de Llibres</h2>
@stop
@section('content')
    {!! Form::open(array('url' => '/llibres/'.$llibre->id, 'method' => 'PUT')) !!}
    <h3>{{$llibre->titol}}</h3>
    <div class="form-group">
        {!! Form::label('lbltitol', 'Titol') !!}
        <div class="form-controls">
            {!! Form::text('titol', $llibre->titol, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('publicacio', 'Data de Publicació') !!}
        <div class="form-controls">
            {!! Form::date('publicacio',  $llibre->publicacio, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('id', 'Tematica') !!}
        <div class="form-controls">
            {!! Form::select('tematica', $temes, $llibre->tematica, ['class' => 'form-control']) !!}
        </div>
    </div>
    {!! Form::submit('Modificar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop
@section('footer')
    <h3>App development</h3>
@stop-->