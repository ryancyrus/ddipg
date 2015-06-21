<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesheetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notesheets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('notesheet_id');
			$table->string('subject');
			$table->string('origin');
			$table->string('destination');
			$table->string('status');
			$table->string('holder');
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
		Schema::drop('notesheets');
	}

}
