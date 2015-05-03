<?php

use Illuminate\Database\Seeder;
/* CHANGE */
use App\ChungLoai;

/* CHANGE */
class ChungLoaiTableSeeder extends Seeder {					

	public function run()
	{
		/* CHANGE */
		DB::table('chung_loais')->delete();

		/* CHANGE */
		$filepath = storage_path().'/seedfiles/'.'02 - chung_loais.csv';

		if (($handle = fopen($filepath, "r")) !== FALSE) 
		{
		    //by-pass the header
		    $data = fgetcsv($handle, 1000, ",");

		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
		    {
		        /* CHANGE */
		        ChungLoai::create(
		        		[	'id' => $data[0],
		        			'ten_chung_loai' => $data[1],
		        			'ghi_chu' => $data[2],
		        			'nhom_id' => $data[3],
		        			'slug' => $data[4]
		        		]);
	    	}
	    	
	    	fclose($handle);
	    }

	}
}