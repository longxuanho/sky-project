<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loais', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ten_loai', 60);
			$table->string('ghi_chu', 100)->nullable();
			$table->integer('chung_loai_id')->unsigned()->index();
			$table->string('slug', 60);
			$table->timestamps();

			$table->foreign('chung_loai_id')
					->references('id')
					->on('chung_loais')
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
		Schema::drop('loais');
	}

}
