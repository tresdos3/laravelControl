<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFiltroTable extends Migration {

	public function up()
	{
		Schema::create('filtro', function(Blueprint $table) {
			$table->increments('id');
			$table->string('sitios',100)->unique();
			$table->string('estado', 1);
		});
	}

	public function down()
	{
		Schema::drop('filtro');
	}
}