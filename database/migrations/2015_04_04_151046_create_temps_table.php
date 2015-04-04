<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('temps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('temp_id');
			$table->integer('temp');
			$table->timestamps();
		});	}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('temps');
	}

}
