	<!-- Este archivo va en resources.views -->

{{-- Para usar la plantilla template.blade.php --}}
@extends('template')


@section('pageTitle', 'Crear una Película')

@section('cssLink', '/css/bootstrap.min.css')

@section('mainContent')
	<!-- Listado de peliculas -->

	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<h2>Ingresar trabajo realizado</h2>

		@if ($errors)
			@foreach ($errors->all() as $error)
				<p style="color: red;">{{ $error }}</p>
			@endforeach
		@endif

		<form action="/trabajo/create" method="post" enctype="multipart/form-data">
			{{-- Genera un input de tipo hidden con el token --}}
			{{-- {{ csrf_field() }} --}}
			@csrf

			<div class="row">

				<div class="col-6">
					<div class="form-group">
						<label>Trabajo presupuestado: </label>
						<input type="text" name="title" class="form-control" value="{{ old('title') }}">
						@error ('title')
							<i style="color: red;"> {{ $errors->first('title') }}</i>
						@enderror
					</div>
				</div>

				<div class="col-6">
					<div class="form-group">
						<label>Descripción (Breve)</label>
						<input type="text" name="descripcion" class="form-control">
						@error ('descripcion')
							<i style="color: red;"> {{ $errors->first('descripcion') }}</i>
						@enderror
					</div>
				</div>

				<div class="col-6">
					<div class="form-group">
						<label>Plazo de realización: </label>
						<input type="text" name="plazo" class="form-control">
					</div>
				</div>

				<div class="col-6">
					<label>Imagen del trabajo finalizado:</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="imagen">
    				<label class="custom-file-label">Choose file...</label>
					</div>
					@error ('poster')
						<i style="color: red;"> {{ $errors->first('poster') }}</i>
					@enderror
				</div>

			<button type="submit" class="btn btn-success">GUARDAR</button>
		</form>
	</div>
@endsection
