@extends('layouts.app')
@section('titlePage')
Cursos
@stop
@section('scripts')

	<style type="text/css">
		.grid-container {
		  display: grid;
		  grid-template-columns: auto auto auto auto;
		  padding: 3%;
		  width: 90%;
		}
		.grid-item {
		  background-color: #fff;
		  border: 1px solid rgba(0,0,0,.125);
		  padding: 15%;
		  margin: 3%;
		  text-align: center;
		}

	</style>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    @stop
@section('content')
	<div class="container">
		@guest @else <a href="{{ asset('curs/create') }}">Crear un curs</a>@endguest
		<h1 class="my-4">Page Heading
			<small>Secondary Text</small>
		</h1>
		{{ $cursos->links() }}
		@if (!is_null($cursos))
			@foreach ($cursos as $curs)
			<div class="row">
				<div class="col-md-7">
					<a @guest href="{{ url('/login') }}" @else href="{{ asset('curs/'.$curs->idCurs) }}">@endguest
						<img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('storage/images/banner/'.$curs->Banner) }}" alt="">
					</a>
				</div>
				<div class="col-md-5">
					<a href="{{ asset('curs/'.$curs->idCurs) }}">
						<h3>{{	$curs->NomCurs }}</h3>
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. antium veniam exercitationem expedita laborum at voluptate. re, voluptates totam at aut nemo deserunt rem magni pariatur  perspiciatis atque eveniet unde.</p>
					<a class="btn btn-primary" href="{{ asset('curs/'.$curs->idCurs) }}">View Project</a>
				</div>
			</div>
			<hr>
			<br>

			@endforeach
		@endif
		<ul class="pagination justify-content-center">
			<li class="page-item">
				<a class="page-link" href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">1</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">2</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">3</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Next</span>
				</a>
			</li>
		</ul>
	<div>

@stop
@section('footer')
@stop
