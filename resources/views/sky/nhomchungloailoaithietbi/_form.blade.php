<div class="form-group">
	{!! Form::label('ma_thiet_bi', 'Mã:') !!}
	{!! Form::text('ma_thiet_bi', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('associated_with', 'Assoc:') !!}
	{!! Form::text('associated_with', null, ['class' => 'form-control']) !!}	
</div>
{{-- <div class="form-group">
	{!! Form::label('loai_id', 'Loại:') !!}
	{!! Form::text('loai_id', null, ['class' => 'form-control']) !!}	
</div> --}}

<div class="form-group">
	{!! Form::label('hang_san_xuat_id', 'Hãng Sản Xuất:') !!}
	{!! Form::select('hang_san_xuat_id' , $hang_san_xuat_list, null, ['class' => 'form-control']) !!}	
</div>

<div class="form-group">
	{!! Form::label('so_dang_ky', 'Số Đăng Ký:') !!}
	{!! Form::text('so_dang_ky', null, ['class' => 'form-control']) !!}	
</div>
<div class="form-group">
	{!! Form::label('so_giay_dang_kiem', 'Số Giấy Đăng Kiểm:') !!}
	{!! Form::text('so_giay_dang_kiem', null, ['class' => 'form-control']) !!}	
</div>
<div class="form-group">
	{!! Form::label('nam_san_xuat', 'Năm Sản Xuất:') !!}
	{!! Form::text('nam_san_xuat', null, ['class' => 'form-control']) !!}	
</div>
<div class="form-group">
	{!! Form::label('nam_su_dung', 'Năm Sử Dụng:') !!}
	{!! Form::text('nam_su_dung', null, ['class' => 'form-control']) !!}	
</div>
<div class="form-group">
	{!! Form::label('so_khung', 'Số Khung:') !!}
	{!! Form::text('so_khung', null, ['class' => 'form-control']) !!}	
</div>
<div class="form-group">
	{!! Form::label('so_may', 'Số Máy:') !!}
	{!! Form::text('so_may', null, ['class' => 'form-control']) !!}	
</div>

<div class="form-group">
	{!! Form::label('dv_so_huu_id', 'Đơn Vị Sở Hữu:') !!}
	{!! Form::select('dv_so_huu_id' , $dv_so_huu_list, null, ['class' => 'form-control']) !!}	
</div>

<div class="form-group">
	{!! Form::label('dv_quan_ly_id', 'Đơn Vị Quản Lý:') !!}
	{!! Form::select('dv_quan_ly_id' , $dv_quan_ly_list, null, ['class' => 'form-control']) !!}	
</div>

<div class="form-group">
	{!! Form::label('dv_thue_id', 'Đơn Vị Thuê:') !!}
	{!! Form::select('dv_thue_id' , $dv_thue_list, null, ['class' => 'form-control']) !!}	
</div>

<div class="form-group">
	{!! Form::label('khu_vuc_id', 'Khu Vực:') !!}
	{!! Form::select('khu_vuc_id' , $khu_vuc_list, null, ['class' => 'form-control']) !!}	
</div>

<div class="form-group">
	{!! Form::label('model_id', 'Model:') !!}
	{!! Form::select('model_id' , $model_thiet_bi_list, null, ['class' => 'form-control']) !!}	
</div>

<div class="form-group">
	{!! Form::label('ghi_chu', 'Ghi Chú:') !!}
	{!! Form::text('ghi_chu', null, ['class' => 'form-control']) !!}	
</div>
<div class="form-group">
	{!! Form::label('tag_1', 'Tag:') !!}
	{!! Form::text('tag_1', null, ['class' => 'form-control']) !!}	
</div>
<div class="form-group">
	{!! Form::submit($submit_button_text, ['class' => 'btn btn-primary form-control']) !!}
</div>