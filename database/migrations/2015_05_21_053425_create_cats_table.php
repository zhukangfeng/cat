<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cats', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->date('date_of_birth')->nullable();
			$table->enum('sex', ['male', 'female'])->nullable();
			$table->double('price')->nullable();
			$table->text('attribute')->nullable();
			$table->integer('breed_id')->unsigned()->nullable();
			$table->integer('created_user_id')->unsigned()->nullable();
			$table->integer('updated_user_id')->unsigned()->nullable();
			$table->timestamps();
			$table->foreign('breed_id')->references('id')->on('breeds');
			$table->foreign('created_user_id')->references('id')->on('users');
			$table->foreign('updated_user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cats');
	}

}
