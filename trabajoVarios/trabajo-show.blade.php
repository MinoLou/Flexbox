<!-- Va en resources views
{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

@section('pageTitle', $movieToFind->title)

@section('cssLink', '/css/bootstrap.min.css')

@section('mainContent')-->
	<!-- Listado de peliculas -->
	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<h2>Trabajo realizado: {{ $trabajoToFind->title }}</h2>
		<img src="/storage/imagen/{{ $trabajoToFind->imagen }}" width="100">
		<ul>
			<li><b>Descripcion:</b> {{ $trabajoToFind->rating }}</li>
			<li><b>Plazo de realización:</b>{{ $trabajoToFind->plazo }}</li>
			</li>

			@auth
				{{-- @if (Auth::user()->id === $trabajoToFind->user_id)
				@endif --}}
				<form action="/trabajo/{{ $trabajoToFind->id }}" method="post">
					@csrf
					{{ method_field('delete') }}
					<button type="submit" class="btn btn-danger">BORRAR</button>
					<a href="{{ route('edit', $trabajoToFind->id) }}" class="btn btn-warning">Editar</a>
				</form>
			@endauth
		</ul>
	</div>
@endsection
