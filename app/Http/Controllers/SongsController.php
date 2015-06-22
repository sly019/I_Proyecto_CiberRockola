<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SongsController extends Controller {

	public function index()
	{
		$song = \App\Models\Song::all();
		return view('song/index', compact('song'));
	}

	public function create()
	{
		return view('song/agregar');
	}

	public function store()
	{		
		$_POST['rutacancion'] = "/home/sly-019/Escritorio/1Proyecto/laravelProyecto/Canciones/".$_POST['rutacancion'];
		$_POST['rutacancion'] = $_POST['rutacancion'] ;
		\App\Models\Song::create(array('rutacancion' => $_POST['rutacancion'], 'nombrecancion' => $_POST['nombrecancion'],
					 'artistacancion' => $_POST['artistacancion']));
		return redirect('songs');
	}


	public function edit($id)
	{
		$song = \App\Models\Song::find($id);
		return view('song/editar', compact('song'));

	}


	public function update($id)
	{
		$rutacancion ="";
		$songUpdate = \App\Models\Song::find($id);
		if (is_null(\Input::get('temp'))) {
			$rutacancion = \Input::get('rutacancion') ;
		} else {
			$rutacancion = "/home/sly-019/Escritorio/1Proyecto/laravelProyecto/Canciones/".\Input::get('temp');
		}		
		$artistacancion = \Input::get('artistacancion');
		$nombrecancion = \Input::get('nombrecancion');		
		$songUpdate->artistacancion = $artistacancion;
		$songUpdate->nombrecancion = $nombrecancion;
		$songUpdate->rutacancion = $rutacancion;
		$songUpdate->save();
		return redirect('songs');
	}

	public function destroy($id)
	{
		//echo $id;
		$song = \App\Models\Song::find($id);
		$song->delete();
		return redirect('songs');
	}

}
