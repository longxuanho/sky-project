<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ThietBi extends Model {

	protected $fillable = [
		'ma_thiet_bi',
		'associated_with',
		// 'loai_id',
		'hang_san_xuat_id',
		'so_dang_ky',
		'so_giay_dang_kiem',
		'nam_san_xuat',
		'nam_su_dung',
		'so_khung',
		'so_may',
		'dv_so_huu_id',
		'dv_quan_ly_id',
		'dv_thue_id',
		'khu_vuc_id',
		'model_id',
		'ghi_chu',
		'tag_1',
		'last_modified_by_user_id'
	];

	// Attributes
	public function setMaThietBiAttribute($value)
	{
		$this->attributes['ma_thiet_bi'] = strtoupper($value);
	}

	public function setAssociatedWithAttribute($value)
	{
		$this->attributes['associated_with'] = strtoupper($value);
	}

	public function setSoDangKyAttribute($value)
	{
		$this->attributes['so_dang_ky'] = strtoupper($value);
	}

	public function setSoGiayDangKiemAttribute($value)
	{
		$this->attributes['so_giay_dang_kiem'] = strtoupper($value);
	}

	public function setSoKhungAttribute($value)
	{
		$this->attributes['so_khung'] = strtoupper($value);
	}

	public function setSoMayAttribute($value)
	{
		$this->attributes['so_may'] = strtoupper($value);
	}

	public function setTag1Attribute($value)
	{
		$this->attributes['tag_1'] = strtoupper($value);
	}

	//Relationships
	public function loai()
	{
		return $this->belongsTo('App\Loai');
	}

	public function dvQuanLy()
	{
		return $this->belongsTo('App\DvQuanLy');
	}

	public function dvSoHuu()
	{
		return $this->belongsTo('App\DvSoHuu');
	}

	public function dvThue()
	{
		return $this->belongsTo('App\DvThue');
	}

	public function hangSanXuat()
	{
		return $this->belongsTo('App\HangSanXuat');
	}

	public function modelThietBi()
	{
		return $this->belongsTo('App\ModelThietBi');
	}

	public function khuVuc()
	{
		return $this->belongsTo('App\KhuVuc');
	}

}
