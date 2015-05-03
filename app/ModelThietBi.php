<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelThietBi extends Model {

	protected $fillable = [
		'ten_model_thiet_bi',
		'hang_san_xuat',
		'thong_so_ky_thuat_id',
		//'ghi_chu'
	];

	public function thietBis()	
	{
		return $this->hasMany('App\ThietBi');
	}

}
