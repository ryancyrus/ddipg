<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('results', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('student');
			$table->string('subject_1');
			$table->string('subject_2');
			$table->string('subject_3');
			$table->string('subject_4');
			$table->string('subject_5');
			$table->string('subject_6');
			$table->string('subject_7');
			$table->string('subject_8');
			$table->string('subject_9');
			$table->string('subject_10');
			$table->string('subject_11');
			$table->string('sgpa');
			$table->string('cgpa');
			$table->timestamps();
			$table->foreign('student')
					->references('identif')
					->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('results');
	}

}
