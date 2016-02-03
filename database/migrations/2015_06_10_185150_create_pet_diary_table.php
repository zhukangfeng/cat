<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetDiaryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pet_diary', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('pet_id')->unsigned()->nullable();
			$table->integer('user_id')->unsigned()->comment('writed user');
			$table->boolean('is_public')->default(false)->comment('pet\'s daily life');
			$table->string('title');
			$table->text('content');
			$table->softDeletes();
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
		Schema::drop('pet_diary');
	}

}
