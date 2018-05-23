@extends('layouts.app')
@section('titlePage')
Configuració
@stop
    @section('scripts')        
            

        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    @stop
@section('content')


<?php

		/*
        use App\Curso;
		$n = DB::table('cursos')->max('idCurs');
		echo '<br><br><br><br><br>';
		echo var_dump($n);
		*/

?>
<section>
<div class="container">
	{!! Form::open(array('url' => '/usuari/'.$usuari->idUsuari, 'files'=>true, 'method' => 'PUT')) !!}
	<h3>{{$usuari->name}} {{$usuari->Cognoms}}</h3>
	<div class="form-group">
		{!! Form::label('name', 'Nom') !!}
		<div class="form-controls">
			{!! Form::text('name', $usuari->name, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('Cognoms', 'Cognoms') !!}
		<div class="form-controls">
			{!! Form::text('Cognoms', $usuari->Cognoms, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('DataNaixement', 'Data de naixement') !!}
		<div class="form-controls">
			{!! Form::date('DataNaixement',  $usuari->DataNaixement, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('PaisResidencia', 'País de residència') !!}
		<div class="form-controls">
			{!! Form::text('PaisResidencia',  $usuari->PaisResidencia, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('Imatge', 'Imatge de perfil', ['class' => 'custom-file']) !!}
			{!! Form::file('Imatge', null, ['class' => 'custom-file-input']) !!}
			<span class="custom-file-control"></span>
	</div>
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
</div>
@stop
</section>
@section('footer')
	<h3>Pulmentum</h3>
@stop