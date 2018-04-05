@extends('layouts.master')
@section('titlePage')
Home
@stop
@section('header')
    
@stop
@section('content')
    <div class="container">
        <h2>De moment al registrar un nou usuari es redirigeix a perfil.blade.php (que seria la vista que s'hauria de carregar quan es vulgui modificar o consultar les dades de l'usuari) però la idea seria que es redirigís a l'interfície preparada per a que l'usuari pugui començar a utilitzar la plataforma, <span style="color:red;">aquesta vista encara no està creada</span></h2>
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
