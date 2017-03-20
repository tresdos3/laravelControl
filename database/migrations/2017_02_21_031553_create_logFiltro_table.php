<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogFiltroTable extends Migration {

	public function up()
	{
		Schema::create('logFiltro', function(Blueprint $table) {
			$table->increments('id');
			$table->date('fecha');
			$table->time('hora');
			$table->integer('idhijo')->unsigned();
			$table->integer('idfiltro')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('logFiltro');
	}
}