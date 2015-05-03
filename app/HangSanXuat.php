<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class HangSanXuat extends Model {

	protected $fillable = [
		'ma_hang_san_xuat',
		'ten_hang_san_xuat',
		'quoc_gia',
		'ghi_chu',
		//'slug'
	];

	public function thietBis()	
	{
		return $this->hasMany('App\ThietBi');
	}

}
