<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportTimeline extends Model {

	protected $fillable = [
		'time_line',
		'tag',
		'slug'
	];

	public function reports()
	{
		return $this->hasMany('App\Report');
	}

}
