<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DvQuanLy extends Model {

	protected $fillable = [
		'ma_dv_quan_ly',
		'ten_dv_quan_ly',
		'ghi_chu',
		'tag_1',
		//'slug'
	];

	public function thietBis()	
	{
		return $this->hasMany('App\ThietBi');
	}

}
