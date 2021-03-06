@extends('app')

<?php
$thiet_bi_count_by_loai = DB::table('thiet_bis')
									->where('loai_id', '=', $loai->id)->count()	;
$thiet_bi_all = DB::table('thiet_bis')
									->leftJoin('loais', 'thiet_bis.loai_id', '=', 'loais.id')
									->leftJoin('chung_loais', 'loais.chung_loai_id', '=', 'chung_loais.id' )
									->leftJoin('nhoms', 'chung_loais.nhom_id', '=', 'nhoms.id')
									->count()	;
?>

@section('include-top')
	<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/datepicker/css/datepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/build/summernote.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/plugins/gritter/css/jquery.gritter.css') }}">

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
                    <li>
                        <a href="{{ route('nhom.chungloai.show', [$nhom->slug, $chung_loai->slug]) }}">
							{{ $chung_loai->ten_chung_loai }}
                        </a>
					</li>
					<li class="active">
                        <a href="{{ route('nhom.chungloai.loai.show', [$nhom->slug, $chung_loai->slug, $loai->slug]) }}">
							{{ $loai->ten_loai }}
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
				
                <!-- start: PAGE TITLE & BREADCRUMB -->
                <div class="page-header">
					<h1>{{ (Auth::user()->isAdmin() || Auth::user()->isManager()) ? 'Cập nhật...' : 'Chi tiết...'}} <small>{{ (!isset($user_last_modified)) ? 'Thay đổi thông tin hạng mục ['.$thiet_bi->ma_thiet_bi.']' : 'Cập nhật lần cuối bởi '.$user_last_modified->name. ', '.$thiet_bi->updated_at }}</small></h1>
				</div>
				<!-- end: PAGE TITLE & BREADCRUMB -->
                
            </div>
		</div>
		<!-- end: PAGE HEADER -->
        
        <!-- start: PAGE CONTENT -->
		<div class="row">
			
            
            <div class="col-sm-10 col-sm-offset-1">
                <!-- start: DETAIL PANEL -->
				<div class="panel panel-default">
					
                    <div class="panel-heading">
						<i class="fa fa-reorder"></i>
						Chi Tiết
						<div class="panel-tools">
							@if( Auth::user()->isAdmin() || Auth::user()->isManager() )
								<a class="btn btn-xs btn-link" data-toggle="modal" href="#myModal3"><i class="fa fa-trash-o"></i></a>
							@endif
								<a class="btn btn-xs btn-link panel-collapse collapses" href="#"></a>
						</div>
					</div>

					<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
											&times;
										</button>
										<h4 class="modal-title">Bạn chắc chứ?</h4>
									</div>
									<div class="modal-body">
										<p>
											Thao tác này sẽ xóa hạng mục [ {{ $thiet_bi->ma_thiet_bi }} ] khỏi hệ thống. Các bản ghi đã xóa sẽ không thể khôi phục lại.
										</p>
									</div>
									<div class="modal-footer">
										
										{!! Form::model($thiet_bi, ['route' => ['nhom.chungloai.loai.thietbi.destroy', $nhom->slug, $chung_loai->slug, $loai->slug, $thiet_bi->id], 'method' => 'DELETE']) !!}
										<button aria-hidden="true" data-dismiss="modal" class="btn btn-default">
											Đóng
										</button>
										<button type="submit" class="btn btn-default">
											Chấp Nhận
										</button>
										{!! Form::close() !!}
									</div>
								</div>
							</div>
						</div>
                    
					<div class="panel-body">

						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-info">
									<button data-dismiss="alert" class="close">
										&times;
									</button>
									<i class="fa fa-info-circle"></i>
									&nbsp;Hiện có [{{ $thiet_bi_count_by_loai }}] phương tiện thuộc loại {{ $loai->ten_loai }}, trên tổng số [{{ $thiet_bi_all }}] phương tiện mà Sky đang quản lý. <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bạn có thể thay đổi các thông tin về [{{ $thiet_bi->ma_thiet_bi }}] hoặc xóa hạng mục này khỏi hệ thống.
								</div>
							</div>
                    	</div>
                    	@include('errors.list')
                    	{!! Form::model($thiet_bi, 
                    		[	'method' => 'PATCH', 
								'route' => 	['nhom.chungloai.loai.thietbi.update', $nhom->slug, $chung_loai->slug, $loai->slug, $thiet_bi->id],
								'class' => 'form-horizontal', 'role' => 'form'
							]) !!}

							@include('sky.nhomchungloailoaithietbi._form_')

							
							@if( Auth::user()->isAdmin() || Auth::user()->isManager() )	
								<div class="row">
									<div class="col-md-12 space20">
										<button type="submit" class="btn btn-info">
											Cập Nhật <i class="fa fa-plus"></i>
										</button>
									</div>
								</div>
							@endif

						{!! Form::close() !!}
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
	<script src="{{ asset('assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/autosize/jquery.autosize.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery-maskmoney/jquery.maskMoney.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/commits.js') }}"></script>
	<script src="{{ asset('assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/summernote/build/summernote.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('assets/plugins/ckeditor/adapters/jquery.js') }}"></script>
	<script src="{{ asset('assets/js/form-elements.js') }}"></script>

	<script src="{{ asset('assets/plugins/bootstrap-paginator/src/bootstrap-paginator.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery.pulsate/jquery.pulsate.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.min.js') }}"></script>
	<script src="{{ asset('assets/js/ui-elements.js') }}"></script>
	<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@stop

@section('include-script')
	<script>
		jQuery(document).ready(function() {
			Main.init();
            FormElements.init();
            UIElements.init();

		});
	</script>
@stop
