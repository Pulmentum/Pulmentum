@extends('layouts.app')
@section('titlePage')
Curs
@stop
@section('scripts')
@stop
@section('content')

<div class="container">

	@if (!is_null($curs))
		<h3 style="color:blue">Vista del curs dels usuaris ALUMNES o PROFESSORS</h3><br>
		<h3>Nom del curs: {{$curs->NomCurs}}</h3>
		<?php 
			switch($curs->nomTipus){
				case '0': echo '<h3>Tipus: Llenguatge</h3>'; break;
				case '1': echo '<h3>Tipus: Framework</h3>'; break;
				case '2': echo '<h3>Tipus: API</h3>'; break;
				case '3': echo '<h3>Tipus: Llibreria</h3>'; break;
				case '4': echo '<h3>Tipus: SDK</h3>'; break;
				case '5': echo '<h3>Tipus: Pluggin</h3>'; break;
				case '6': echo '<h3>Tipus: Altre</h3>'; break;
				default: break;
			}
		?>
		<h3>Matèria: {{$curs->NomLlenguatge}}</h3>
		<?php 
			switch($curs->Nivell){
				case '0': echo '<h3>Nivell: Principiant</h3>'; break;
				case '1': echo '<h3>Nivell: Intermig</h3>'; break;
				case '2': echo '<h3>Nivell: Avançat</h3>'; break;
				default: break;
			}
		?>
		<h3>Preu: {{$curs->Preu}}</h3>
		<?php 
			switch($curs->Idioma){
				case '0': echo '<h3>Idioma: Català</h3>'; break;
				case '1': echo '<h3>Idioma: Castellà</h3>'; break;
				case '2': echo '<h3>Idioma: Anglès</h3>'; break;
				default: break;
			}
		?>
	@endif

</div>

@stop
@section('footer')
	<h3>Pulmentum</h3>
@stop
