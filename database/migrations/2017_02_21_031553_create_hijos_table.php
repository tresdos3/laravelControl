<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHijosTable extends Migration {

	public function up()
	{
		Schema::create('hijos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('imei', 50)->unique();
			$table->string('image', 100);
			$table->string('estado', 1);
			$table->integer('idusers')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('hijos');
	}
}