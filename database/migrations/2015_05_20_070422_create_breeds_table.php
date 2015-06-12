<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreedsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cats_breeds', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('attribute')->nullable();
			$table->integer('created_user_id')->unsigned()->nullable();
			$table->integer('updated_user_id')->unsigned()->nullable();
			$table->timestamps();
			$table->foreign('created_user_id')->references('id')->on('users');
			$table->foreign('updated_user_id')->references('id')->on('users');
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
		Schema::drop('cats_breeds');
	}

}
