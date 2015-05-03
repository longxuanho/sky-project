<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Loai extends Model {

	protected $fillable = [
		'ten_loai',
		'ghi_chu',
		'chung_loai_id',
		//'slug'
	];

	public function chungLoai()
	{
		return $this->belongsTo('App\ChungLoai');
	}

	public function thietBis()	
	{
		return $this->hasMany('App\ThietBi');
	}

}
