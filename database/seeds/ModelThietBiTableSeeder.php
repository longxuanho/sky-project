<?php

use Illuminate\Database\Seeder;
/* CHANGE */
use App\ModelThietBi;

/* CHANGE */
class ModelThietBiTableSeeder extends Seeder {					

	public function run()
	{
		/* CHANGE */
		DB::table('model_thiet_bis')->delete();

		/* CHANGE */
		$filepath = storage_path().'/seedfiles/'.'07 - model_thiet_bis.csv';

		if (($handle = fopen($filepath, "r")) !== FALSE) 
		{
		    //by-pass the header
		    $data = fgetcsv($handle, 1000, ",");

		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
		    {
		        /* CHANGE */
		        ModelThietBi::create(
		        		[	'id' => $data[0],
		        			'ten_model_thiet_bi' => $data[1],
		        			'hang_san_xuat' => $data[2],
		        			'thong_so_ky_thuat_id' => $data[3],
		        			'ghi_chu' => $data[4]
		        		]);
	    	}
	    	
	    	fclose($handle);
	    }

	}
}