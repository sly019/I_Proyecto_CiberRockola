<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Jobs\EncolarMusica;
use App\Models\MyQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;


class SongsController extends Controller {

	public function index(Request $request)
	{
		$song = \App\Models\Song::name($request->get('name'))->artist($request->get('artist'))->orderBy('artistacancion', 'ASC')->paginate();
		return view('song/index', compact('song'));
	}

	public function create()
	{
		return view('song/agregar');
	}

	public function store()
	{		
		$_POST['rutacancion'] = "/home/sly-019/Escritorio/Proyecto/Canciones/".$_POST['rutacancion'];
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

	   public function enqueue($id)
    {
    	$song = \App\Models\Song::find($id);
    	$cancion = '"' ."$song->rutacancion".'"';
		\Queue::push(new EncolarMusica($cancion));
		shell_exec('play '.$cancion);
		return redirect('songs');
    }

	public function update($id)
	{

		$rutacancion ="";
		$songUpdate = \App\Models\Song::find($id);
		if (is_null(\Input::get('temp'))) {
			$rutacancion = \Input::get('rutacancion') ;
		} else {
			$rutacancion = "/home/sly-019/Escritorio/Proyecto/Canciones/".\Input::get('temp');
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
		$song = \App\Models\Song::find($id);
		$song->delete();
		return redirect('songs');
	}



}
