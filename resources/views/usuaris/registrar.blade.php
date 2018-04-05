@extends('layouts.master')
@section('titlePage')
Pulmentum
@stop
@section('header')
	
@stop
@section('content')
	<div class="container" style="max-width: 45%;">
		<h2>Registra't a <a style="color: inherit; text-decoration: inherit;" href="{{url('/')}}"><span style="font-weight: bold;">Pulmentum</span></h2></a>
		<hr><br>
		{!! Form::open(array('url' => '/usuari')) !!}
		<div class="row">
			<div class="form-group col-6">
				{!! Form::label('Nom', 'Nom') !!}
				<div class="form-controls">
					{!! Form::text('Nom', null, ['class' => 'form-control', 'required']) !!}
				</div>
			</div>
			<div class="form-group col-6">
				{!! Form::label('Cognoms', 'Cognoms') !!}
				<div class="form-controls">
					{!! Form::text('Cognoms', null, ['class' => 'form-control', 'required']) !!}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-6">
				{!! Form::label('DataNaixement', 'Data de naixement') !!}
				<div class="form-controls">
					{!! Form::date('DataNaixement', null, ['class' => 'form-control', 'required']) !!}
				</div>
			</div>
			<div class="form-group col-6">
				{!! Form::label('PaisResidencia', 'País') !!}
				<div class="form-controls">
					{!! Form::text('PaisResidencia', null, ['class' => 'form-control', 'required']) !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('Email', 'E-mail') !!}
			<div class="form-controls">
				{!! Form::email('Email', null, ['class' => 'form-control', 'required']) !!}
			</div>
		</div>
		{!! Form::submit('Registrar-se', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
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