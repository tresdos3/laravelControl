<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoUserTable extends Migration {

	public function up()
	{
		Schema::create('TipoUser', function(Blueprint $table) {
			$table->increments('id');
			$table->string('tipo');
			$table->string('estado', 1);
		});
	}

	public function down()
	{
		Schema::drop('TipoUser');
	}
}