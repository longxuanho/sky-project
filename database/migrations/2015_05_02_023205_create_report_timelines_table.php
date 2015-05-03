<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTimelinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('report_timelines', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('time_line', 20)->index();
			$table->string('tag', 60)->nullable();
			$table->string('slug', 20);
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
		Schema::drop('report_timelines');
	}

}
