<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reports', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 100);
			$table->string('desc', 100)->nullable();
			$table->string('tag', 60)->nullable();
			$table->string('path',200);
			$table->integer('timeline_id')->unsigned()->index();
			$table->integer('category_id')->unsigned()->index();
			$table->integer('user_id')->unsigned()->index();

			$table->timestamps();

			$table->foreign('timeline_id')
					->references('id')
					->on('report_timelines')
					->onDelete('cascade');

			$table->foreign('category_id')
					->references('id')
					->on('report_categories')
					->onDelete('cascade');

			$table->foreign('user_id')
					->references('id')
					->on('users')
					->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reports');
	}

}
