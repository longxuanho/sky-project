<?php

use Illuminate\Database\Seeder;
/* CHANGE */
use App\DvQuanLy;

/* CHANGE */
class DvQuanLyTableSeeder extends Seeder {					

	public function run()
	{
		/* CHANGE */
		DB::table('dv_quan_lies')->delete();

		/* CHANGE */
		$filepath = storage_path().'/seedfiles/'.'06.01 - dv_quan_lies.csv';

		if (($handle = fopen($filepath, "r")) !== FALSE) 
		{
		    //by-pass the header
		    $data = fgetcsv($handle, 1000, ",");

		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
		    {
		        /* CHANGE */
		        DvQuanLy::create(
		        		[	'id' => $data[0],
		        			'ma_dv_quan_ly' => $data[1],
		        			'ten_dv_quan_ly' => $data[2],
		        			'ghi_chu' => $data[3],
		        			'tag_1' => $data[4],
		        			'slug' => $data[5]
		        		]);
	    	}
	    	
	    	fclose($handle);
	    }

	}
}