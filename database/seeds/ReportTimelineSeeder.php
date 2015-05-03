<?php

use Illuminate\Database\Seeder;
/* CHANGE */
use App\ReportTimeline;

/* CHANGE */
class ReportTimelineTableSeeder extends Seeder {					

	public function run()
	{
		/* CHANGE */
		DB::table('report_timelines')->delete();

		/* CHANGE */
		$filepath = storage_path().'/seedfiles/'.'10 - report_timelines.csv';

		if (($handle = fopen($filepath, "r")) !== FALSE) 
		{
		    //by-pass the header
		    $data = fgetcsv($handle, 1000, ",");

		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
		    {
		        /* CHANGE */
		       ReportTimeline::create(
		        		[	'id' => $data[0],
		        			'time_line' => $data[1],
		        			'tag' => $data[2],
		        			'slug' => $data[3]
		        		]);
	    	}
	    	
	    	fclose($handle);
	    }

	}
}