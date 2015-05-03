<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportCategory extends Model {

	protected $fillable = [
		'category',
		'tag',
		'slug'
	];

	public function reports()
	{
		return $this->hasMany('App\Report');
	}

}
