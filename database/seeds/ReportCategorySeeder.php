<?php

use Illuminate\Database\Seeder;
/* CHANGE */
use App\ReportCategory;

/* CHANGE */
class ReportCategoryTableSeeder extends Seeder {					

	public function run()
	{
		/* CHANGE */
		DB::table('report_categories')->delete();

		/* CHANGE */
		$filepath = storage_path().'/seedfiles/'.'09 - report_categories.csv';

		if (($handle = fopen($filepath, "r")) !== FALSE) 
		{
		    //by-pass the header
		    $data = fgetcsv($handle, 1000, ",");

		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
		    {
		        /* CHANGE */
		       ReportCategory::create(
		        		[	'id' => $data[0],
		        			'category' => $data[1],
		        			'tag' => $data[2],
		        			'slug' => $data[3]
		        		]);
	    	}
	    	
	    	fclose($handle);
	    }

	}
}