<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->char('siren', 9);
			$table->string('address_street');
			$table->string('address_extra');
			$table->char('address_zip', 5);
			$table->string('address_city');
			$table->string('web_site');
			$table->char('phone', 10);
			$table->char('fax', 10);				
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
		Schema::drop('companies');
	}

}
