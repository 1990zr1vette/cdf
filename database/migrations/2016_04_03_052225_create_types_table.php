<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('product_id');
			$table->string('type');
			$table->string('type_fr');
			$table->string('keywords');
			$table->string('keywords_fr');
			$table->string('description');
			$table->string('description_fr');			
			$table->tinyInteger('active')->default(1);			
			$table->timestamps();
			$table->index('product_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('types');
	}

}
