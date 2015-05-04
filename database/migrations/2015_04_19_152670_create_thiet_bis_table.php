<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThietBisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thiet_bis', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ma_thiet_bi', 20)->index();
			$table->string('associated_with', 20)->index();
			$table->integer('loai_id')->unsigned()->index();
			$table->integer('hang_san_xuat_id')->unsigned()->index();
			$table->string('so_dang_ky', 30)->nullable();
			$table->string('so_giay_dang_kiem', 30)->nullable();
			$table->integer('nam_san_xuat')->nullable();
			$table->integer('nam_su_dung')->nullable();
			$table->string('so_khung', 30)->nullable();
			$table->string('so_may', 30)->nullable();
			$table->integer('dv_so_huu_id')->unsigned()->index();
			$table->integer('dv_quan_ly_id')->unsigned()->index();
			$table->integer('dv_thue_id')->unsigned()->index()->nullable();
			$table->integer('khu_vuc_id')->unsigned()->index();
			$table->integer('model_id')->unsigned()->index()->nullable();
			$table->string('ghi_chu', 60)->nullable();
			$table->string('tag_1', 60)->nullable();
			$table->integer('last_modified_by_user_id')->unsigned()->nullable();
			
			$table->timestamps();

			$table->foreign('loai_id')
					->references('id')
					->on('loais')
					->onDelete('cascade');

			$table->foreign('model_id')
					->references('id')
					->on('model_thiet_bis')
					->onDelete('cascade');

			$table->foreign('hang_san_xuat_id')
					->references('id')
					->on('hang_san_xuats')
					->onDelete('cascade');

			$table->foreign('khu_vuc_id')
					->references('id')
					->on('khu_vucs')
					->onDelete('cascade');

			$table->foreign('dv_quan_ly_id')
					->references('id')
					->on('dv_quan_lies')
					->onDelete('cascade');

			$table->foreign('dv_so_huu_id')
					->references('id')
					->on('dv_so_huus')
					->onDelete('cascade');

			$table->foreign('dv_thue_id')
					->references('id')
					->on('dv_thues')
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
		Schema::drop('thiet_bis');
	}

}
