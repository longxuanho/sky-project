<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelThietBisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('model_thiet_bis', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ten_model_thiet_bi', 60);
			$table->string('hang_san_xuat', 60);
			$table->integer('thong_so_ky_thuat_id')->unsigned()->nullable()->index();
			$table->string('ghi_chu', 100)->nullable();
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
		Schema::drop('model_thiet_bis');
	}

}
