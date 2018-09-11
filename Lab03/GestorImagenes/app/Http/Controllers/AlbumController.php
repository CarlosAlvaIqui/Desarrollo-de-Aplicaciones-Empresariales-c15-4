<?php namespace GestorImagenes\Http\Controllers;

class AlbumController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return  'Monstrar albumes del usuario';
	}





      public function getCrearAlbum(){
        return "Formulario de crear albumes";
      }
      public function postCrearAlbum(){
        return "Almacenando album";
      }
      public function getActualizarAlbum(){
        return "Formulario de actualizar album";
      }
      public function postActualizarAlbum(){
        return "Actualizar Album";
      }
      public function getEliminarAlbum(){
        return "Formulario de eliminar Albumes";
      }
      public function postEliminarAlbum(){
        return "eliminando Album";
      }
      public function missingMethod($parameters=array()){
        abort(404);
      }
}
