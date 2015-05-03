<?php

use Illuminate\Database\Seeder;
/* CHANGE */
use App\Loai;

/* CHANGE */
class LoaiTableSeeder extends Seeder {					

	public function run()
	{
		/* CHANGE */
		DB::table('loais')->delete();

		/* CHANGE */
		$filepath = storage_path().'/seedfiles/'.'03 - loais.csv';

		if (($handle = fopen($filepath, "r")) !== FALSE) 
		{
		    //by-pass the header
		    $data = fgetcsv($handle, 1000, ",");

		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
		    {
		        /* CHANGE */
		        Loai::create(
		        		[	'id' => $data[0],
		        			'ten_loai' => $data[1],
		        			'ghi_chu' => $data[2],
		        			'chung_loai_id' => $data[3],
		        			'slug' => $data[4]
		        		]);
	    	}
	    	
	    	fclose($handle);
	    }

	}
}