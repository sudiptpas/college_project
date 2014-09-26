<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('person', function(Blueprint $table)
		{
			$table->increments('person_id');
			$table->integer('company_id');
			$table->string('fullname');
			$table->string('address');
			$table->string('gender');
			$table->string('phone');
			$table->string('mobile');
			$table->string('email');
			$table->string('date_birth');
			$table->integer('type');
			$table->integer('status');
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
		Schema::drop('person');

	}

}
