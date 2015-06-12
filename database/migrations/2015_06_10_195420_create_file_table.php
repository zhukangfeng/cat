<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('file', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('file_cd', 10)->nullable()->comment('file\'s type');
			$table->string('path')->nullable()->comment('save path');
			$table->string('name')->nullable()->comment('save name');
			$table->string('type')->nullable()->comment('file type');
			$table->text('remark')->nullable()->comment('file\'s comment');
			$table->integer('user_id')->unsigned()->comment('save user');
			$table->integer('size')->unsigned()->comment('save user');
			$table->integer('deleted_user_id')->unsigned()->comment('delete user id');
			// $table->datetime('deleted_at');
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
		Schema::drop('file');
	}

}
