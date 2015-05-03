<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// use Illuminate\Http\Request;
use Request;

use App\Loai;
use App\ChungLoai;
use App\Nhom;
use App\ThietBi;

class NhomChungLoaiLoaiController extends Controller {

	
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
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($nhom_slug, $chung_loai_slug, $loai_slug)
	{

		$nhom = Nhom::whereSlug($nhom_slug)->firstOrFail();
		$chung_loai = ChungLoai::whereSlug($chung_loai_slug)->firstOrFail();
		$loai = Loai::with('chungLoai', 'chungLoai.nhom')->whereSlug($loai_slug)->firstOrFail();

		$query = Request::get('s');
		$thiet_bis = Loai::with('thietBis')->whereSlug($loai_slug)
													->firstOrFail()->thietBis()->with('hangSanXuat', 'dvSoHuu', 'dvQuanLy', 'khuVuc')->get();


		// if($query)
		// {
		// 	$thiet_bis = $thiet_bis->where('ma_thiet_bi', 'LIKE', "%$query%")
		// 										->orWhere('associated_with', 'LIKE', "%$query%")->whereLoaiId('loai_id')
		// 										->orWhere('so_dang_ky', 'LIKE', "%$query%")->whereLoaiId('loai_id')
		// 										->orWhere('so_giay_dang_kiem', 'LIKE', "%$query%")->whereLoaiId('loai_id')
		// 										->orWhere('nam_su_dung', 'LIKE', "%$query%")->whereLoaiId('loai_id')
		// 										->orWhere('tag_1', 'LIKE', "%$query%")->whereLoaiId('loai_id');
		// 										// ->orWhere('ghi_chu', 'LIKE', "%$query%")->whereLoaiId('loai_id')
		// }

		// $thiet_bis = $thiet_bis->paginate(20);

		// $thiet_bis->load('hangSanXuat', 'dvSoHuu', 'dvQuanLy', 'khuVuc');

		return view('sky.nhomchungloailoai.show', compact('loai', 'thiet_bis', 'nhom', 'chung_loai', 'loai', 'query'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
