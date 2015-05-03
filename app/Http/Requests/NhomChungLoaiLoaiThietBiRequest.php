<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\ThietBi;

class NhomChungLoaiLoaiThietBiRequest extends Request {

	

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		


		switch ($this->method()) {
			case 'POST':
			{	// create
				return [
							'ma_thiet_bi' => 'required|min:3|unique:thiet_bis,ma_thiet_bi',
							'associated_with' => 'required|min:3',
							'nam_su_dung' => 'integer',
							'nam_san_xuat' => 'integer',
						];
			}
			case 'PATCH':	// update
			{				
				return [
							'ma_thiet_bi' => 'required|min:3|unique:thiet_bis,ma_thiet_bi,'.$this->request->get('id'),
							'associated_with' => 'required|min:3',
							'nam_su_dung' => 'integer',
							'nam_san_xuat' => 'integer',
						];	
			}
			default:
				return [
							'ma_thiet_bi' => 'required|min:3',
							'associated_with' => 'required|min:3',
							'nam_su_dung' => 'integer',
							'nam_san_xuat' => 'integer',
						];
				break;
		}
		
	}

}
