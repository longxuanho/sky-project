@extends('app')

<?php 	
		$thiet_bi_count_by_loai = DB::table('thiet_bis')
									->leftJoin('loais', 'thiet_bis.loai_id', '=', 'loais.id')
									->where('loai_id', '=', $loai->id)->count()	;
?>

@section('include-top')
	<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/select2/select2.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/media/css/DT_bootstrap.css') }}" />
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->

@stop		

@section('content')
<div class="container">
	<!-- start: PAGE HEADER -->
	<div class="row">
        <div class="col-sm-12">
            
            <!-- start: PAGE TITLE & BREADCRUMB -->
			<ol class="breadcrumb">
				<li>
					<i class="clip-home-3"></i>
					<a href="{{ url('/home') }}">
						Trang Chính
					</a>
				</li>
				<li class="active">
						Phương Tiện
				</li>
                <li>
                    <a href="{{ route('nhom.show', $nhom->slug) }}">
						{{ $nhom->ten_nhom }}
                    </a>
				</li>
                <li class="active">
                    <a href="{{ route('nhom.chungloai.show', [$nhom->slug, $chung_loai->slug]) }}">
						{{ $chung_loai->ten_chung_loai }}
                    </a>
				</li>
				<li class="search-box">
					<form class="sidebar-search">
						<div class="form-group">
							<input type="text" placeholder="Bạn muốn tìm gì?">
							<button class="submit">
								<i class="clip-search-3"></i>
							</button>
						</div>
					</form>
				</li>
			</ol>
			
            <div class="page-header">
				<h1>{{ $loai->ten_loai }} <small>Bao gồm {{ $thiet_bi_count_by_loai }} hạng mục </small></h1>
			</div>
			<!-- end: PAGE TITLE & BREADCRUMB -->
            
        </div>
	</div>
	<!-- end: PAGE HEADER -->

	<!-- start: FLASH MESSAGE -->
	@if(Session::has('flash_message_create'))
		<div class="alert alert-success">
			<i class="fa fa-check-circle"></i>
			{{ Session::get('flash_message_create') }}
		</div>
	@endif
	@if(Session::has('flash_message_update'))
		<div class="alert alert-info">
			<i class="fa fa-check-circle"></i>
			{{ Session::get('flash_message_update') }}
		</div>
	@endif
	@if(Session::has('flash_message_destroy'))
		<div class="alert alert-warning">
			<i class="fa fa-check-circle"></i>
			{{ Session::get('flash_message_destroy') }}
		</div>
	@endif
	<!-- end: FLASH MESSAGE -->

    
    <!-- start: PAGE CONTENT -->
	<div class="row">
		<div class="col-md-12">
			
            <!-- start: DETAIL PANEL -->
			<div class="panel panel-default">
				
                <div class="panel-heading">
					<i class="fa fa-reorder"></i>
					Chi Tiết
					<div class="panel-tools">
						<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
						</a>
					</div>
				</div>
                
				<div class="panel-body page-nhom-chungloai-loai-thietbi-text">
				    
                    @if (Auth::user()->isAdmin() || Auth::user()->isManager())
                    <div class="row">
						<div class="col-md-12 space20">
							<a class="btn btn-success" href="{{ route('nhom.chungloai.loai.thietbi.create', [$nhom->slug, $chung_loai->slug, $loai->slug ]) }}" role="button">
								Thêm Mới <i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
					@endif


                    @if (Auth::user()->email === "dohaison@gmail.com" || Auth::user()->email === "tranvantuan@gmail.com")
                  
                    <div class="table-responsive">
						<table class="table table-striped table-bordered table-hover table-full-width " id="sample_1">
							<thead>
                                <tr>
                                    <th>Mã TB</th>
                                    <th class="hidden-xs">Assoc.</th>
                                    <th>Hãng SX</th>
                                    <th>Số ĐK</th>
                                    <th class="hidden-xs">Số GĐK</th>
                                    <th class="text-center">ĐV Quản Lý</th>
                                    <th class="text-center">Khu Vực</th>
                                    <th class="text-center hidden-xs">Năm SD</th>
                                    <th class="text-center">Tag</th>
                                </tr>
				            </thead>
							<tbody>
								@foreach($thiet_bis as $thiet_bi)
									<tr>
	                                    <td>
	                                    	<a href="{{ route('nhom.chungloai.loai.thietbi.edit', [$nhom->slug, $chung_loai->slug, $loai->slug, $thiet_bi->id ]) }}" style="color: #666666;text-decoration:none;">
	                                    		{{ $thiet_bi->ma_thiet_bi }}
	                                    	</a>
	                                    </td>
	                                    <td class="hidden-xs">
											<a href="{{ route('nhom.chungloai.loai.thietbi.edit', [$nhom->slug, $chung_loai->slug, $loai->slug, $thiet_bi->id ]) }}" style="color: #666666;text-decoration:none;">
	                                    		{{ $thiet_bi->associated_with }}
											</a>
	                                    </td>
	                                    <td>{{ $thiet_bi->hangSanXuat->ten_hang_san_xuat }}</td>
	                                    <td>{{ $thiet_bi->so_dang_ky ? $thiet_bi->so_dang_ky : '-' }}</td>
	                                    <td class="hidden-xs">{{ $thiet_bi->so_giay_dang_kiem ? $thiet_bi->so_giay_dang_kiem : '-' }}</td>
	                                    <td class="text-center">{{ $thiet_bi->dvQuanLy->ma_dv_quan_ly }}</td>
	                                    <td class="text-center">{{ $thiet_bi->khuVuc->ma_khu_vuc }}</td>
	                                    <td class="text-center hidden-xs">{{ $thiet_bi->nam_su_dung ? $thiet_bi->nam_su_dung : '-' }}</td>
	                                    <td class="text-center">{{ $thiet_bi->tag_1 ? $thiet_bi->tag_1 : '-' }}</td>
	                                </tr>
								@endforeach
                            </tbody>
						</table>
					</div>

					@else

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover table-full-width " id="sample_1">
							<thead>
                                <tr>
                                    <th>Mã TB</th>
                                    <th class="hidden-xs">Assoc.</th>
                                    <th>Hãng SX</th>
                                    <th class="text-center hidden-xs">ĐV Sở Hữu</th>
                                    <th class="text-center">ĐV Quản Lý</th>
                                    <th class="text-center">Khu Vực</th>
                                    <th class="text-center hidden-xs">Năm SD</th>
                                    <th class="text-center">Tag</th>
                                </tr>
				            </thead>
							<tbody>
								@foreach($thiet_bis as $thiet_bi)
									<tr>
	                                    <td>
	                                    	<a href="{{ route('nhom.chungloai.loai.thietbi.edit', [$nhom->slug, $chung_loai->slug, $loai->slug, $thiet_bi->id ]) }}" style="color: #666666;text-decoration:none;">
	                                    		{{ $thiet_bi->ma_thiet_bi }}
	                                    	</a>
	                                    </td>
	                                    <td class="hidden-xs">
											<a href="{{ route('nhom.chungloai.loai.thietbi.edit', [$nhom->slug, $chung_loai->slug, $loai->slug, $thiet_bi->id ]) }}" style="color: #666666;text-decoration:none;">
	                                    		{{ $thiet_bi->associated_with }}
											</a>
	                                    </td>
	                                    <td>{{ $thiet_bi->hangSanXuat->ten_hang_san_xuat }}</td>
	                                    <td class="text-center hidden-xs">{{ $thiet_bi->dvSoHuu->ma_dv_so_huu }}</td>
	                                    <td class="text-center">{{ $thiet_bi->dvQuanLy->ma_dv_quan_ly }}</td>
	                                    <td class="text-center">{{ $thiet_bi->khuVuc->ma_khu_vuc }}</td>
	                                    <td class="text-center hidden-xs">{{ $thiet_bi->nam_su_dung ? $thiet_bi->nam_su_dung : '-' }}</td>
	                                    <td class="text-center">{{ $thiet_bi->tag_1 ? $thiet_bi->tag_1 : '-' }}</td>
	                                </tr>
								@endforeach
                            </tbody>
						</table>
					</div>

					@endif


                    
                    
				</div>
            </div>
            <!-- end: DETAIL PANEL -->
            

		</div>
	</div>
    <!-- end: PAGE CONTENT -->             
</div>
	           

@stop

@section('include-bot')
	<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<script type="text/javascript" src="{{ asset('assets/plugins/bootbox/bootbox.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/jquery-mockjax/jquery.mockjax.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/DataTables/media/js/DT_bootstrap.js') }}"></script>
	<script src="{{ asset('assets/js/table-data.js') }}"></script>
	<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@stop

@section('include-script')
	<script>
		jQuery(document).ready(function() {
			Main.init();
            TableData.init();

            $('div.alert').delay(2500).slideUp(400);

		});
	</script>
@stop