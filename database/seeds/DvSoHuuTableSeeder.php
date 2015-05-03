<?php

use Illuminate\Database\Seeder;
/* CHANGE */
use App\DvSoHuu;

/* CHANGE */
class DvSoHuuTableSeeder extends Seeder {					

	public function run()
	{
		/* CHANGE */
		DB::table('dv_so_huus')->delete();

		/* CHANGE */
		$filepath = storage_path().'/seedfiles/'.'06.02 - dv_so_huus.csv';

		if (($handle = fopen($filepath, "r")) !== FALSE) 
		{
		    //by-pass the header
		    $data = fgetcsv($handle, 1000, ",");

		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
		    {
		        /* CHANGE */
		        DvSoHuu::create(
		        		[	'id' => $data[0],
		        			'ma_dv_so_huu' => $data[1],
		        			'ten_dv_so_huu' => $data[2],
		        			'ghi_chu' => $data[3],
		        			'tag_1' => $data[4],
		        			'slug' => $data[5]
		        		]);
	    	}
	    	
	    	fclose($handle);
	    }

	}
}