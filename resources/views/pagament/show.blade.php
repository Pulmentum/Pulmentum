@extends('layouts.app')
@section('titlePage')
Pagament
@stop
@section('scripts')
@stop
@section('content')
<body>
	

	<div class="container">

<?php

	//Use App;

	$url = url()->current();
	echo '<br><p>url()--current(): '.$url.'</p>';
	$i = URL::to('/');
	echo '<br><p>URL facade: '.$i.'</p>';
    $i = strlen($i);
    echo '<br><p>URL facade length: '.$i.'</p>';
    $n = strlen($url);
    echo '<br><p>length url()--current(): '.$n.'</p>';
    $n = $n*(-1);
    $url = substr($url, $i, -$n);
    echo '<br><p>substring url: '.$url.'</p>';

?>


	</div>

	</body>
@stop

@section('footer')
	<h3>Pulmentum</h3>
@stop
