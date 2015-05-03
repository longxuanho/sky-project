<?php

use Illuminate\Database\Seeder;
/* CHANGE */
use App\KhuVuc;

/* CHANGE */
class KhuVucTableSeeder extends Seeder {					

	public function run()
	{
		/* CHANGE */
		DB::table('khu_vucs')->delete();

		/* CHANGE */
		$filepath = storage_path().'/seedfiles/'.'05 - khu_vucs.csv';

		if (($handle = fopen($filepath, "r")) !== FALSE) 
		{
		    //by-pass the header
		    $data = fgetcsv($handle, 1000, ",");

		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
		    {
		        /* CHANGE */
		        KhuVuc::create(
		        		[	'id' => $data[0],
		        			'ma_khu_vuc' => $data[1],
		        			'ten_khu_vuc' => $data[2],
		        			'ghi_chu' => $data[3],
		        			'tag_1' => $data[4],
		        			'slug' => $data[5]
		        		]);
	    	}
	    	
	    	fclose($handle);
	    }

	}
}