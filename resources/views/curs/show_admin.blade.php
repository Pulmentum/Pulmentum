@extends('layouts.app')
@section('titlePage')
Curs
@stop
@section('scripts')
@stop
@section('content')

<div class="container">

	@if (!is_null($curs))
		<h3 style="color:blue">Vista del curs dels usuaris PROFESSORS</h3><br>
		<h3>Nom del curs: {{$curs->NomCurs}}</h3>
		<h3>Tipus: {{$curs->nomTipus}}</h3>
		<h3>Matèria: {{$curs->NomLlenguatge}}</h3>
		<h3>Nivell: {{$curs->Nivell}}</h3>
		<h3>Preu: {{$curs->Preu}}</h3>
		<h3>Idioma: {{$curs->Idioma}}</h3>
	@endif

</div>

@stop
@section('footer')
	<h3>Pulmentum</h3>
@stop
