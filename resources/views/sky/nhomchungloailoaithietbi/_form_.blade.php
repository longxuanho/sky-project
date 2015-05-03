
<hr/>
{!! Form::hidden('id', null, [   'id' => 'id',
                                'class' => 'form-control', 
                                ]   ) !!}

<div class="form-group">
    <label class="col-sm-2 control-label" for="ma_thiet_bi">
		Thiết Bị:
	</label>
	<div class="col-sm-5">
		<span class="input-icon">
			{!! Form::text('ma_thiet_bi', null, [   'id' => 'ma_thiet_bi',
                                                    'class' => 'form-control tooltips', 
                                                    'placeholder' =>'Mã Thiết Bị',
                                                    'data-placement' => 'top',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Mã quản lý thiết bị'
                                                ]   ) !!}
			<i class="clip clip-barcode"></i>
        </span>
	</div>
	<div class="col-sm-4">
		<span class="input-icon">
			{!! Form::text('associated_with', null, [   'id' => 'associated_with',
                                                        'class' => 'form-control tooltips', 
                                                        'placeholder' =>'Associated With',
                                                        'data-placement' => 'top',
                                                        'data-rel' => 'tooltip',
                                                        'data-original-title' => 'Tên TB kèm theo'
                                                    ]   ) !!}
			<i class="fa fa-arrow-circle-left"></i>
        </span>
	</div>
</div>                                        

<div class="form-group">
    <div class="col-sm-5 col-sm-offset-2">
        <span class="input-icon">
            {!! Form::select('hang_san_xuat_id' , $hang_san_xuat_list, null, [ 'id' => 'hang_san_xuat_id',
                                                    'class' => 'form-control tooltips search-select select-text-ident',
                                                    'placeholder' => 'Hãng Sản Xuất',
                                                    'data-placement' => 'bottom',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Tên hãng sản xuất'
                                                    ]) !!}
           <i class="fa fa-briefcase"></i>
        </span>
    </div>
    <div class="col-sm-4">
        <span class="input-icon">
            {!! Form::select('model_thiet_bi' , $model_thiet_bi_list, null, [ 'id' => 'model_thiet_bi',
                                                    'class' => 'form-control tooltips search-select select-text-ident',
                                                    'placeholder' => 'Model Thiết Bị',
                                                    'data-placement' => 'bottom',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Tên model thiết bị'
                                                    ]) !!}
            <i class="fa fa-folder-open"></i>
        </span>
    </div>
</div>

<hr/>

<div class="form-group">
    <label class="col-sm-2 control-label">
		Đăng ký:
	</label>
	<div class="col-sm-3">
		<span class="input-icon">
            {!! Form::text('so_dang_ky', null, [   'id' => 'so_dang_ky',
                                                    'class' => 'form-control tooltips', 
                                                    'placeholder' =>'Số Đăng Ký',
                                                    'data-placement' => 'top',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Số đăng ký phương tiện'
                                                ]   ) !!}
			<i class="fa fa-pencil-square-o"></i> </span>
	</div>
	<div class="col-sm-3">
		<span class="input-icon">
            {!! Form::text('so_giay_dang_kiem', null, [   'id' => 'so_giay_dang_kiem',
                                                    'class' => 'form-control tooltips', 
                                                    'placeholder' =>'Số Giấy Đăng Kiểm',
                                                    'data-placement' => 'top',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Số giấy đăng kiểm'
                                                ]   ) !!}
			<i class="fa fa-file-text"></i> </span>
	</div>
	<div class="col-sm-3">
		<span class="input-icon">
			{!! Form::text('tag_1', null, [   'id' => 'tag_1', 
                                                    'class' => 'form-control tooltips', 
                                                    'placeholder' =>'Tag',
                                                    'data-placement' => 'top',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Tạo tag tìm kiếm nhanh'
                                                ]   ) !!}
			<i class="fa fa-hand-o-right"></i> </span>
	</div>
</div>
 <div class="form-group">
	<label class="col-sm-2 control-label">
    </label>
	<div class="col-sm-5">
		<span class="input-icon">
			{!! Form::text('so_khung', null, [   'id' => 'so_khung', 
                                                    'class' => 'form-control tooltips', 
                                                    'placeholder' =>'Số Khung',
                                                    'data-placement' => 'bottom',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Số khung'
                                                ]   ) !!}
			<i class="fa fa-cogs"></i> </span>
	</div>
	<div class="col-sm-4">
		<span class="input-icon">
			{!! Form::text('so_may', null, [   'id' => 'so_may', 
                                                    'class' => 'form-control tooltips', 
                                                    'placeholder' =>'Số Máy',
                                                    'data-placement' => 'bottom',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Số máy'
                                                ]   ) !!}
			<i class="fa fa-cog"></i> </span>
	</div>
</div>
<hr/>
<div class="form-group">
	<label class="col-sm-2 control-label">
		Đơn Vị:
	</label>
    <div class="col-sm-3">
        <span class="input-icon">
            {!! Form::select('dv_so_huu_id', $dv_so_huu_list, null, [ 'id' => 'dv_so_huu_id',
                                                    'class' => 'form-control tooltips search-select select-text-ident',
                                                    'placeholder' => 'Đơn Vị Sở Hữu',
                                                    'data-placement' => 'bottom',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Tên đơn vị sở hữu'
                                                    ]) !!}
            <i class="clip clip-user-5"></i>
        </span>
    </div>
    <div class="col-sm-3">
        <span class="input-icon">
            {!! Form::select('dv_quan_ly_id', $dv_quan_ly_list, null, [ 'id' => 'dv_quan_ly_id',
                                                    'class' => 'form-control tooltips search-select select-text-ident',
                                                    'placeholder' => 'Đơn Vị Quản Lý',
                                                    'data-placement' => 'bottom',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Tên đơn vị quản lý'
                                                    ]) !!}
            <i class="fa fa-user"></i>
        </span>
    </div>
    <div class="col-sm-3">
        <span class="input-icon">
            {!! Form::select('dv_thue_id', $dv_thue_list, null, [ 'id' => 'dv_thue_id',
                                                    'class' => 'form-control tooltips search-select select-text-ident',
                                                    'placeholder' => 'Đơn Vị Thuê',
                                                    'data-placement' => 'bottom',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Tên đơn vị thuê'
                                                    ]) !!}
            <i class="clip clip-user-4"></i>
        </span>
    </div>
</div>
<hr/>
<div class="form-group">
	<label class="col-sm-2 control-label">
		Hoạt Động:
	</label>
	<div class="col-sm-5">
		<span class="input-icon">
			{!! Form::text('nam_su_dung', null, [   'id' => 'nam_su_dung', 
                                                    'class' => 'form-control tooltips', 
                                                    'placeholder' =>'Năm Sử Dụng',
                                                    'data-placement' => 'top',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Năm đưa TB vào hoạt động'
                                                ]   ) !!}
			<i class="fa fa-calendar"></i> </span>
	</div>
	<div class="col-sm-4">
		<span class="input-icon">
			{!! Form::text('nam_san_xuat', null, [  'id' => 'nam_san_xuat', 
                                                    'class' => 'form-control tooltips', 
                                                    'placeholder' =>'Năm Sản Xuất',
                                                    'data-placement' => 'top',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Năm TB được sản xuất'
                                                ]   ) !!}
			<i class="clip clip-calendar"></i> </span>
	</div>
</div>
    
<div class="form-group">
    <div class="col-sm-4 col-sm-offset-2">
        <span class="input-icon">
            {!! Form::select('khu_vuc_id', $khu_vuc_list, null, [ 'id' => 'khu_vuc_id',
                                                    'class' => 'form-control tooltips search-select select-text-ident',
                                                    'placeholder' => 'Khu Vực',
                                                    'data-placement' => 'bottom',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Tên khu vực hoạt động'
                                                    ]) !!}
            <i class="clip clip-location"></i>
        </span>
    </div>
	<div class="col-sm-5">
		<span class="input-icon">
            {!! Form::text('ghi_chu', null, [  'id' => 'ghi_chu', 
                                                    'class' => 'form-control tooltips', 
                                                    'placeholder' =>'Ghi Chú',
                                                    'data-placement' => 'bottom',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Ghi chú về TB',
                                                    'style' => 'margin-top: 3px;'
                                                ]   ) !!}
			<i class="fa fa-quote-left"></i> </span>
	</div>
</div>
<hr/>