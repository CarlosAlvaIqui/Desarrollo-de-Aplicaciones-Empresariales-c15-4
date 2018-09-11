<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaFotos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fotos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('descripcion');
			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('albumes');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fotos');
	}

}
