<?php

use Illuminate\Database\Seeder;
use App\Nhom;

class NhomTableSeeder extends Seeder {

	public function run()
	{
		DB::table('nhoms')->delete();

		$filepath = storage_path().'/seedfiles/'.'01 - nhoms.csv';

		if (($handle = fopen($filepath, "r")) !== FALSE) 
		{
		    //by-pass the header
		    $data = fgetcsv($handle, 1000, ",");

		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
		    {
		        Nhom::create(
		        		[	'id' => $data[0],
		        			'ten_nhom' => $data[1],
		        			'ghi_chu' => $data[2],
		        			'tag_1' => $data[3],
		        			'slug' => $data[4]
		        		]);
	    	}
	    	
	    	fclose($handle);
	    }

	}
}