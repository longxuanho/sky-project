<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhom extends Model {

	protected $fillable = [
		'ten_nhom',
		'ghi_chu',
		'tag_1',
		// 'slug'
	];

	public function chungLoais()
	{
		return $this->hasMany('App\ChungLoai');
	}

}
