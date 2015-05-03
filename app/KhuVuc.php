<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class KhuVuc extends Model {

	protected $fillable = [
		'ma_khu_vuc',
		'ten_khu_vuc',
		'ghi_chu',
		'tag_1',
		//'slug'
	];

	public function thietBis()	
	{
		return $this->hasMany('App\ThietBi');
	}


}
