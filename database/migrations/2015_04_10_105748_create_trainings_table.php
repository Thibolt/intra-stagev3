<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trainings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('class', array('SIO1', 'SIO2'));
			$table->date('start_date');
			$table->date('end_date');
			$table->date('sign_date');
			//Always create column holding the foreign key
			//Before creating the constraint!
			$table->integer('professor_id')->unsigned();
			$table->foreign('professor_id')->references('id')->on('professors');
			$table->integer('student_id')->unsigned();
			$table->foreign('student_id')->references('id')->on('students');
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
		Schema::drop('trainings');
	}

}
