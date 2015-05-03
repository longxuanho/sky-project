<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChungLoaisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chung_loais', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ten_chung_loai', 60)->default('');
			$table->string('ghi_chu', 100)->nullable();
			$table->integer('nhom_id')->unsigned()->index();
			$table->string('slug', 60);
			$table->timestamps();

			$table->foreign('nhom_id')
					->references('id')
					->on('nhoms')
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
		Schema::drop('chung_loais');
	}

}
