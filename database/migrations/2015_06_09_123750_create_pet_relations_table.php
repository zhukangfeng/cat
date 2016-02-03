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
			$table->string('pet_type', '1')->defautl('0')->nullable()->comment('the kind of pet, 0:other, 1:cat, 2:dog');
			$table->string('pet_type_name')->nullable()->comment('the name of pet\'s kind');
			$table->datetime('begin_at');
			$table->datetime('end_at')->nullable();
			$table->string('status', 2)->default('1')->nullable()->comment('the status of pet, 0:died, 1:keeping, 2:sold, 3:last');
			$table->text('remark');
			$table->boolean('is_public', 1)->defaut(true)->comment(' false:no public, true:public');
			$table->foreign('owner_id')->references('id')->on('users');
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
