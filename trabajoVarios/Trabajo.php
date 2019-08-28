	<!-- Este archivo va en app Model -->
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
	// Especificamos las columnas que podemos escribir
	protected $fillable = ['title', 'descripcion', 'plazo'];

	// Especificamos las columnas que están protegidas
	protected $guarded = ['id'];

	// Para traer el valor de la fecha como tal
	//protected $dates = ['release_date'];

	//public function genre()
	//{
	//	return $this->belongsTo(Genre::class);
//	}

	//public function actors()
	//{
	//	return $this->belongsToMany(Actor::class);
//	}
}
