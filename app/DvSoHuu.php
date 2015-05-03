<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DvSoHuu extends Model {

	protected $fillable = [
		'ma_dv_so_huu',
		'ten_dv_so_huu',
		'ghi_chu',
		'tag_1',
		//'slug'
	];

	public function thietBis()	
	{
		return $this->hasMany('App\ThietBi');
	}

}
