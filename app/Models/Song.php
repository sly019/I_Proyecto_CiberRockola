<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model {

	protected $table = 'canciones';
	protected $fillable = ['nombrecancion', 'artistacancion', 'rutacancion'];
	public $timestamps = false;


	public function scopeName($query, $name){
		if (trim($name)!= "") {
			$query-> where(\DB::raw("CONCAT(artistacancion)"),"LIKE","%$name%");
		} 	
	}

	public function scopeArtist($query, $artist){
		if (trim($artist)!= "") {
			$query-> where(\DB::raw("CONCAT(nombrecancion)"),"LIKE","%$artist%");
		} 	
	}
}



