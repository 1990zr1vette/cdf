<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('testimonials', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('testimonial');
			$table->char('language')->size(2);	
			$table->tinyInteger('active')->default(0);			
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
		Schema::drop('testimonials');
	}

}
