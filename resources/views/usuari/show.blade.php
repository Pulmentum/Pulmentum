@extends('layouts.app')
@section('titlePage')
Perfil
@stop
@section('scripts')        
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
@stop
@section('content')

<!-- TEMPLATE UTILITZADA https://bootsnipp.com/snippets/featured/people-card-with-tabs  -->

<div class="container col-lg-6 col-sm-6">
    <div class="card hovercard">
        <div class="card-background" style="display:flex; justify-content: center; align-items: center;">
            <img class="card-bkimg" style="width: 20em; border-radius: 100%; margin-top: 2%" alt="ProfileImage" src="{{ asset('storage/images/profile/'.$usuari->Imatge) }}"/>
        </div>
        <div class="card-info" style="display:flex; justify-content: center; align-items: center;">
            <span class="card-title" style="font-size: 1.5em;">{{$usuari->name}} {{$usuari->Cognoms}}</span>
        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button style="width:17.1em;" type="button" id="stars" class="btn btn-primary" href="#cursos" data-toggle="tab"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                <div class="hidden-xs">Historial de cursos</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button style="width:17.1em;" type="button" id="favorites" class="btn btn-default" href="#dades" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Dades d'usuàri</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button style="width:17.1em;" type="button" id="following" class="btn btn-default" href="#payments" data-toggle="tab"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span>
                <div class="hidden-xs">Pagaments</div>
            </button>
        </div>
    </div>

    <div class="well">
      <div class="tab-content card container" style="height:40%">
        <div class="tab-pane active container" id="cursos">
          <h3>Cursant actualment</h3>
          <h3>Cursos completats</h3>
        </div>
        <div class="tab-pane container" style="display: none;" id="dades">

            {!! Form::open(array('url' => '/usuari/'.$usuari->idUsuari, 'files'=>true, 'method' => 'PUT')) !!}
            <h3>Nom: {{$usuari->name}} {{$usuari->Cognoms}}</h3>
            <h3>Correu electrònic: {{$usuari->email}}</h3>
            <h3>Data de naixement: {{$usuari->DataNaixement}}</h3>
            <h3>País de residència: {{$usuari->PaisResidencia}}</h3>
            <a href="{{ asset('usuari/' . $usuari->idUsuari . '/edit') }}">Modificar</a>
        </div>                      
        <div class="tab-pane container" style="display: none;" id="payments">
          <h3>Historial de pagaments</h3>
          <h3>Modificar dades</h3>
          <h3>Afegir mètode de pagament</h3>
        </div>
      </div>
    </div>
    
</div>

<!--<br><br><br><br><br><br>
<br>PERFIL DE L'USUARI
<br>{
	<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> Imatge de perfil (amb opció de canviar-la)
	<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> Mostrar dades (amb opció de modificar-les)
	<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> Mostrar cursos actius (a dins es distingeixen els que es cursen dels que s'imparteixen)
	<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> Mostrar historial de cursos (a dins es distingeixen els que es cursen dels que s'imparteixen)
	<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> Mostrar opcions de pagaments (amb opció d'afergir dades com nº targeta)
<br>}-->

@stop
@section('footer')
	<h3>Pulmentum</h3>
@stop

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
        
    $(document).ready(function() {

        $(".btn-pref .btn").click(function () {
            var abans = $('.active').attr('id');
            var despres = $(this).attr("href");

            $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
            $(this).removeClass("btn-default").addClass("btn-primary");  

            $("#"+abans).removeClass("active").fadeOut();
            $(despres).addClass("active").fadeIn();
        });

    });

</script>