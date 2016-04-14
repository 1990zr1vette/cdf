<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditorialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('editorials', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('title_fr');
			$table->text('editorial');
			$table->text('editorial_fr');
			$table->string('image');
			$table->tinyInteger('active')->default(1);
			$table->tinyInteger('current')->default(0);
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
		Schema::drop('editorials');
	}

}
