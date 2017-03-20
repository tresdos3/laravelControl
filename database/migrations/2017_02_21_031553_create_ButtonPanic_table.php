<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateButtonPanicTable extends Migration {

	public function up()
	{
		Schema::create('ButtonPanic', function(Blueprint $table) {
			$table->increments('id');
			$table->string('latitud', 25);
			$table->string('longitud', 25);
			$table->date('fecha');
			$table->time('hora');
			$table->integer('idhijo')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('ButtonPanic');
	}
}