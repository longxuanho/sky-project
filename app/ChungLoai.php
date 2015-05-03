<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ChungLoai extends Model {

	protected $fillable = [
		'ten_chung_loai',
		'ghi_chu',
		//'slug'
		// 'nhom_thiet_bi_id'
	];

	public function nhom()
	{
		return $this->belongsTo('App\Nhom');
	}

	public function loais()	
	{
		return $this->hasMany('App\Loai');
	}

}
