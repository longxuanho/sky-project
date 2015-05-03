<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DvThue extends Model {

	protected $fillable = [
		'ma_dv_thue',
		'ten_dv_thue',
		'ghi_chu',
		'tag_1',
		//'slug'
	];

	public function thietBis()	
	{
		return $this->hasMany('App\ThietBi');
	}

}
