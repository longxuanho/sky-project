<?php

use Illuminate\Database\Seeder;
/* CHANGE */
use App\HangSanXuat;

/* CHANGE */
class HangSanXuatTableSeeder extends Seeder {					

	public function run()
	{
		/* CHANGE */
		DB::table('hang_san_xuats')->delete();

		/* CHANGE */
		$filepath = storage_path().'/seedfiles/'.'04 - hang_san_xuats.csv';

		if (($handle = fopen($filepath, "r")) !== FALSE) 
		{
		    //by-pass the header
		    $data = fgetcsv($handle, 1000, ",");

		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
		    {
		        /* CHANGE */
		        HangSanXuat::create(
		        		[	'id' => $data[0],
		        			'ma_hang_san_xuat' => $data[1],
		        			'ten_hang_san_xuat' => $data[2],
		        			'quoc_gia' => $data[3],
		        			'ghi_chu' => $data[4],
		        			'slug' => $data[5]
		        		]);
	    	}
	    	
	    	fclose($handle);
	    }

	}
}