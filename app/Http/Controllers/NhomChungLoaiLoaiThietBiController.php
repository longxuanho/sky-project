<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Nhom;
use App\ChungLoai;
use App\Loai;
use App\ThietBi;
use App\Http\Requests\NhomChungLoaiLoaiThietBiRequest;
use Auth;

class NhomChungLoaiLoaiThietBiController extends Controller {

	function __construct() {

		$this->middleware('auth');
	
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($nhom_slug, $chung_loai_slug, $loai_slug)
	{
		$nhom = Nhom::whereSlug($nhom_slug)->firstOrFail();
		$chung_loai = ChungLoai::whereSlug($chung_loai_slug)->firstOrFail();
		$loai = Loai::whereSlug($loai_slug)->firstOrFail();

		$hang_san_xuat_list = \App\HangSanXuat::orderBy('ten_hang_san_xuat')->lists('ten_hang_san_xuat', 'id');
		$dv_so_huu_list = \App\DvSoHuu::orderBy('ten_dv_so_huu')->lists('ten_dv_so_huu', 'id');
		$dv_quan_ly_list = \App\DvQuanLy::orderBy('ten_dv_quan_ly')->lists('ten_dv_quan_ly', 'id');
		$dv_thue_list = \App\DvThue::orderBy('ten_dv_thue')->lists('ten_dv_thue', 'id');
		$khu_vuc_list = \App\KhuVuc::orderBy('ten_khu_vuc')->lists('ten_khu_vuc', 'id');
		$model_thiet_bi_list = \App\ModelThietBi::orderBy('ten_model_thiet_bi')->lists('ten_model_thiet_bi', 'id');

		return view('sky.nhomchungloailoaithietbi.create', 
			compact('nhom', 'chung_loai', 'loai',
				'hang_san_xuat_list', 'dv_so_huu_list',
				'dv_quan_ly_list', 'dv_thue_list', 'khu_vuc_list', 'model_thiet_bi_list' ));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($nhom_slug, $chung_loai_slug, $loai_slug, NhomChungLoaiLoaiThietBiRequest $request)
	{
		$nhom = Nhom::whereSlug($nhom_slug)->firstOrFail();
		$chung_loai = ChungLoai::whereSlug($chung_loai_slug)->firstOrFail();
		$loai = Loai::whereSlug($loai_slug)->firstOrFail();

		$thiet_bi = new ThietBi($request->all());
		$thiet_bi->last_modified_by_user_id = Auth::user()->id;

		$loai->thietBis()->save($thiet_bi);

		session()->flash('flash_message_create', 'Hạng mục ['. $request->input('ma_thiet_bi') .'] đã được tạo mới thành công!');
		
		return redirect()->route('nhom.chungloai.loai.show',  [ $nhom->slug, $chung_loai->slug, $loai->slug ]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($nhom_slug, $chung_loai_slug, $loai_slug, $thiet_bi_id)
	{
		
		$nhom = Nhom::whereSlug($nhom_slug)->firstOrFail();
		$chung_loai = ChungLoai::whereSlug($chung_loai_slug)->firstOrFail();
		$loai = Loai::whereSlug($loai_slug)->firstOrFail();

		$thiet_bi = ThietBi::findOrfail($thiet_bi_id);
		
		$hang_san_xuat_list = \App\HangSanXuat::orderBy('ten_hang_san_xuat')->lists('ten_hang_san_xuat', 'id');
		$dv_so_huu_list = \App\DvSoHuu::orderBy('ten_dv_so_huu')->lists('ten_dv_so_huu', 'id');
		$dv_quan_ly_list = \App\DvQuanLy::orderBy('ten_dv_quan_ly')->lists('ten_dv_quan_ly', 'id');
		$dv_thue_list = \App\DvThue::orderBy('ten_dv_thue')->lists('ten_dv_thue', 'id');
		$khu_vuc_list = \App\KhuVuc::orderBy('ten_khu_vuc')->lists('ten_khu_vuc', 'id');
		$model_thiet_bi_list = \App\ModelThietBi::orderBy('ten_model_thiet_bi')->lists('ten_model_thiet_bi', 'id');

		if(isset($thiet_bi->last_modified_by_user_id))
			$user_last_modified = \App\User::findOrfail($thiet_bi->last_modified_by_user_id);

		return view('sky.nhomchungloailoaithietbi.edit', compact('thiet_bi',
			'nhom', 'chung_loai', 'loai',
			'hang_san_xuat_list', 'dv_so_huu_list',
			'dv_quan_ly_list', 'dv_thue_list', 'khu_vuc_list', 'model_thiet_bi_list', 'user_last_modified' ));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($nhom_id, $chung_loai_id, $loai_id, $thiet_bi_id, NhomChungLoaiLoaiThietBiRequest $request)
	{

		$thiet_bi = ThietBi::findOrFail($thiet_bi_id);
		$thiet_bi->update($request->all());
		$thiet_bi->update(['last_modified_by_user_id' => Auth::user()->id]);

		session()->flash('flash_message_update', 'Hạng mục ['. $request->input('ma_thiet_bi') .'] được cập nhật thành công!');

		return redirect()->route('nhom.chungloai.loai.show',  [ $nhom_id, $chung_loai_id, $loai_id ]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($nhom_id, $chung_loai_id, $loai_id, $thiet_bi_id)
	{
		
		$thiet_bi = ThietBi::findOrFail($thiet_bi_id);
		$ma_thiet_bi = $thiet_bi->ma_thiet_bi;
		$thiet_bi->delete();

		session()->flash('flash_message_destroy', 'Bạn đã xóa hạng mục ['. $ma_thiet_bi .'] khỏi hệ thống.');

		return redirect()->route('nhom.chungloai.loai.show',  [ $nhom_id, $chung_loai_id, $loai_id ]);
	}

}
