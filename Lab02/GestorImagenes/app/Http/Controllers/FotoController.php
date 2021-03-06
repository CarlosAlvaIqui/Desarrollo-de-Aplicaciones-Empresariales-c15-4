<?php namespace GestorImagenes\Http\Controllers;

class FotoController extends Controller {

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
		return 'Mostrar fotos del usuario';
	}





      public function getCrearFoto(){
        return "Formulario de crear fotos";
      }
      public function postCrearFoto(){
        return "Almacenando Fotos";
      }
      public function getActualizarFoto(){
        return "Formulario de actualizar fotos";
      }
      public function postActualizarFoto(){
        return "Actualizar Foto";
      }
      public function getEliminarFoto(){
        return "Formulario de eliminar fotos";
      }
      public function postEliminarFoto(){
        return "eliminando foto";
      }
      public function missingMethod($parameters=array()){
        abort(404);
      }
}
