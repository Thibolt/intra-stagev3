<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcernsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('concerns', function(Blueprint $table)
		{
			$table->enum('role', array('Représentant', 'Maître de stage'));
			//Always create column holding the foreign key
			//Before creating the constraint!
			$table->integer('training_id')->unsigned();
			$table->foreign('training_id')->references('id')->on('trainings');
			$table->integer('employee_id')->unsigned();
			$table->foreign('employee_id')->references('id')->on('employees');
			$table->primary(array('training_id', 'employee_id'));
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
		Schema::drop('concerns');
	}

}
