<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoutiquesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('boutiques', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('boutique');
			$table->string('website');
			$table->tinyInteger('active')->default(1);			
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
		Schema::drop('boutiques');
	}

}
