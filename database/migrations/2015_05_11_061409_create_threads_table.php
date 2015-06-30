<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('threads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('question');
			$table->string('subject');
			$table->string('origin');
			$table->string('destination');
			$table->string('reply');
			$table->timestamps();

			$table->foreign('origin')->references('identif')->on('users');
			$table->foreign('destination')->references('identif')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('threads');
	}

}
