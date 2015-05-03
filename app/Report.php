<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model {

	protected $fillable = [
		'title',
		'desc',
		'tag',
		'path',
		'timeline_id',
		'category_id',
	];

	public function timeline()
	{
		return $this->belongsTo('App\ReportTimeline');
	}

	public function category()
	{
		return $this->belongsTo('App\ReportCategory');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
