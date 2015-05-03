<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
		$this->call('NhomTableSeeder');
		$this->call('ChungLoaiTableSeeder');
		$this->call('LoaiTableSeeder');
		$this->call('HangSanXuatTableSeeder');
		$this->call('KhuVucTableSeeder');
		$this->call('DvQuanLyTableSeeder');
		$this->call('DvSoHuuTableSeeder');
		$this->call('DvThueTableSeeder');
		$this->call('ModelThietBiTableSeeder');
		$this->call('ThietBiTableSeeder');
		$this->call('ReportCategoryTableSeeder');
		$this->call('ReportTimelineTableSeeder');
	}

}
