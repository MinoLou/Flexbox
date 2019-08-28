<?php
//Este archivo va en app/Controllers
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trabajo;

class TrabajoController extends Controller
{

	public function index()
	{
		$trabajo = Trabajo::all();
		return view('trabajo-index', compact('trabajo'));//trabajo.index no existe aún
	}

//mmm esta no sé como queda
	public function create()
	{
		//$genres = Genre::orderBy('name')->get();
		return view('trabajo-create'); //return view('movies-create', compact('genres'));
	}

	public function store(Request $request)
	{
		// Validamos
		$request->validate([
			'title' => 'required',
			'descripcion' => 'required',
			'plazo' => 'required' | 'numeric',
			'imagen' => 'required | image',
			// 'poster' => 'required | mimes:jpg,png,jpeg',
		], [
			'title.required' => 'El título es obligatorio',
			'descripcion.required' => 'La descripción es obligatoria',
			'plazo.numeric' => 'El plazo debe estar indicado en cantidad de días (númerico)',
		]);

		// Guardar en DB

		// Forma para guardar #1
		// $movie = new Movie;
		// $movie->title = $request['title'];
		// $movie->rating = $request['rating'];
		// $movie->awards = $request['awards'];
		// $movie->length = $request['length'];
		// $movie->release_date = $request['release_date'];
		// $movie->genre_id = $request['genre_id'];
		// $movie->save();

		// Forma para guardar #2
		// Movie::create([
		// 	'title' => $request['title'],
		// 	'rating' => $request['rating'],
		// 	'awards' => $request['awards'],
		// 	'length' => $request['length'],
		// 	'release_date' => $request['release_date'],
		// 	'genre_id' => $request['genre_id']
		// ]);

		// Forma para guardar #3
		$trabajoSaved = Trabajo::create($request->all());

		$imagen = $request["imagen"];

		// Armo un nombre único para este archivo
		$imagenFinal = uniqid("img_") . "." . $imagen->extension();

		// Subo el archivo en la carpeta elegida
		$imagen->storePubliclyAs("public/imagen", $imagenFinal);

		// Le asigno la imagen a la película que guardamos
		$trabajoSaved->imagen = $imagenFinal;
		$trabajoSaved->save();

		// Redireccionamos
		return redirect('/trabajo.index');
	}

	public function show ($id)
	{
		$trabajoToFind = Trabajo::find($id);

		return view('trabajo-show', compact('trabajoToFind'));
	}

	public function destroy ($id)
	{
		$trabajoToDelete = Trabajo::find($id);
		$trabajoToDelete->delete();
		// Redireccionamos
		return redirect('/trabajo.index');
	}

	public function edit ($id)
	{
		$trabajoToEdit = Trabajo::find($id);
	//	$genres = Genre::orderBy('name')->get();
		return view('trabajo-edit', compact('trabajoToEdit', 'genres'));
	}

	public function update ($id, Request $request)
	{
		$trabajoToUpdate = Trabajo::find($id);
		$trabajoToUpdate->title = $request['title'];
		$trabajoToUpdate->descripcion = $request['rating'];
		$trabajoToUpdate->plazo = $request['plazo'];
		$trabajoToUpdate->save();
		return redirect('/trabajo');
	}

//	public function actorsByMovie()
//	{
//		$movies = Movie::all();
//		return view('movies-actors', compact('movies'));
//	}
}
