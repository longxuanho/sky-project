<?php

use Illuminate\Database\Seeder;
/* CHANGE */
use App\DvThue;

/* CHANGE */
class DvThueTableSeeder extends Seeder {					

	public function run()
	{
		/* CHANGE */
		DB::table('dv_thues')->delete();

		/* CHANGE */
		$filepath = storage_path().'/seedfiles/'.'06.03 - dv_thues.csv';

		if (($handle = fopen($filepath, "r")) !== FALSE) 
		{
		    //by-pass the header
		    $data = fgetcsv($handle, 1000, ",");

		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
		    {
		        /* CHANGE */
		        DvThue::create(
		        		[	'id' => $data[0],
		        			'ma_dv_thue' => $data[1],
		        			'ten_dv_thue' => $data[2],
		        			'ghi_chu' => $data[3],
		        			'tag_1' => $data[4],
		        			'slug' => $data[5]
		        		]);
	    	}
	    	
	    	fclose($handle);
	    }

	}
}