<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('idtipo')->references('id')->on('TipoUser')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('hijos', function(Blueprint $table) {
			$table->foreign('idusers')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('logFiltro', function(Blueprint $table) {
			$table->foreign('idhijo')->references('id')->on('hijos')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('logFiltro', function(Blueprint $table) {
			$table->foreign('idfiltro')->references('id')->on('filtro')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('ButtonPanic', function(Blueprint $table) {
			$table->foreign('idhijo')->references('id')->on('hijos')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_idtipo_foreign');
		});
		Schema::table('hijos', function(Blueprint $table) {
			$table->dropForeign('hijos_idusers_foreign');
		});
		Schema::table('logFiltro', function(Blueprint $table) {
			$table->dropForeign('logFiltro_idhijo_foreign');
		});
		Schema::table('logFiltro', function(Blueprint $table) {
			$table->dropForeign('logFiltro_idfiltro_foreign');
		});
		Schema::table('ButtonPanic', function(Blueprint $table) {
			$table->dropForeign('ButtonPanic_idhijo_foreign');
		});
	}
}