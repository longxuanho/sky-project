<?php

use Illuminate\Database\Seeder;
/* CHANGE */
use App\ThietBi;

/* CHANGE */
class ThietBiTableSeeder extends Seeder {					

	public function run()
	{
		/* CHANGE */
		DB::table('thiet_bis')->delete();

		/* CHANGE */
		$filepath = storage_path().'/seedfiles/'.'08 - thiet_bis.csv';

		if (($handle = fopen($filepath, "r")) !== FALSE) 
		{
		    //by-pass the header
		    $data = fgetcsv($handle, 1000, ",");

		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
		    {
		        /* CHANGE */
		       ThietBi::create(
		        		[	'id' => $data[0],
		        			'ma_thiet_bi' => $data[1],
		        			'associated_with' => $data[2],
		        			'loai_id' => $data[3],
		        			'hang_san_xuat_id' => $data[4],
		        			'so_dang_ky' => $data[5],
		        			'so_giay_dang_kiem' => $data[6],
		        			'nam_san_xuat' => $data[7],
		        			'nam_su_dung' => $data[8],
		        			'so_khung' => $data[9],
		        			'so_may' => $data[10],
		        			'dv_so_huu_id' => $data[11],
		        			'dv_quan_ly_id' => $data[12],
		        			'dv_thue_id' => $data[13],
		        			'khu_vuc_id' => $data[14],
		        			'model_id' => $data[15],
		        			'ghi_chu' => $data[16],
		        			'tag_1' => $data[17]
		        		]);
	    	}
	    	
	    	fclose($handle);
	    }

	}
}