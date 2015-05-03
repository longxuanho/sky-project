<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHangSanXuatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hang_san_xuats', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ma_hang_san_xuat', 10)->nullable();
			$table->string('ten_hang_san_xuat', 60);
			$table->string('quoc_gia',60)->nullable();
			$table->string('ghi_chu',100)->nullable();
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
		Schema::drop('hang_san_xuats');
	}

}
