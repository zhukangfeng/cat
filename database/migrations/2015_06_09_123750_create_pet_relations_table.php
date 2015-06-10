<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetRelationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pet_relations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('owner_id')->unsigned()->nullable();
			$table->integer('pet_id')->unsigned()->nullable();
			$table->datetime('begin_at');
			$table->datetime('end_at');
			$table->text('remark');
			$table->foreign('owner_id')->references('id')->on('users');
			$table->foreign('pet_id')->references('id')->on('cats');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pet_relations');
	}

}
