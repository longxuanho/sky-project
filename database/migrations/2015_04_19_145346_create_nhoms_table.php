<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nhoms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ten_nhom', 60);
			$table->string('ghi_chu', 100)->nullable();
			$table->string('tag_1', 60)->nullable();
			$table->string('slug', 60);
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
		Schema::drop('nhoms');
	}

}
