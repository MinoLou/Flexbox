	<!-- Este archivo va en resources.views -->

{{-- Para usar la plantilla template.blade.php --}}
@extends('template')


@section('pageTitle', $movieToEdit->title)

@section('cssLink', '/css/bootstrap.min.css')

@section('mainContent')
	<!-- Listado de peliculas -->

	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<h2>Editar trabajo realizado: {{ $trabajoToEdit->title }}</h2>

		@if ($errors)
			@foreach ($errors->all() as $error)
				<p style="color: red;">{{ $error }}</p>
			@endforeach
		@endif

		<form action="/trabajo/edit/{{ $trabajoToEdit->id }}" method="post">
			@csrf
			{{ method_field('put') }}

			<div class="row">

				<div class="col-6">
					<div class="form-group">
						<label>Trabajo presupuestado: </label>
						<input type="text" name="title" class="form-control" value="{{ old('title', $trabajoToEdit->title) }}">
						@error ('title')
							<i style="color: red;"> {{ $errors->first('title') }}</i>
						@enderror
					</div>
				</div>

				<div class="col-6">
					<div class="form-group">
						<label>Descripcion:</label>
						<input type="text" name="descripcion" class="form-control" value="{{ old('descripcion', $trabajoToEdit->descripcion) }}">
						@error ('descripcion')
							<i style="color: red;"> {{ $errors->first('descripcion') }}</i>
						@enderror
					</div>
				</div>

				<div class="col-6">
					<div class="form-group">
						<label>Plazo de realización:</label>
						<input type="text" name="plazo" class="form-control" value="{{ old('descripcion', $trabajoToEdit->descripcion) }}">
					</div>
				</div>

			</div>

			<button type="submit" class="btn btn-success">GUARDAR</button>
		</form>
	</div>
@endsection
