<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Entries extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('entries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('mundane');
			$table->string('player');
			$table->string('contact');
			$table->string('kingdom');
			$table->string('park');
			$table->string('awarded');
			$table->string('entry_name');
			$table->text('entry');
			$table->string('category');
			$table->string('img_link');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::table('entries', function(Blueprint $table) {
			$table->drop();
		});
	}

}
