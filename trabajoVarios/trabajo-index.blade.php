	<!-- Este archivo esta en las views partials

{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

@section('pageTitle', 'Listado de Películas')

@section('cssLink', '/css/bootstrap.min.css')

@section('mainContent') -->
	<!-- Listado de peliculas -->
	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<h2>Listado de Trabajos</h2>
		<ul>
			@foreach ($trabajos as $trabajo)
				<li>
					<b>Título: </b> {{ $trabajo->title }} <br>
					<b>Descripción: </b> {{ $trabajo->descripcion }} <br>
					<b>Plazo de realización: </b> {{ $trabajo->plazo }} <br>
					<a href="{{ route('show', $trabajo->id) }}" class="btn btn-success">ver detalle del trabajo</a>
					{{-- <a href="/trabajo/{{ $trabajo->id }}" class="btn btn-success">ver detalle del trabajo</a> --}}
				</li>
			@endforeach
		</ul>
	</div>
@endsection
