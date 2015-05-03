@extends('app')

<?php
$reports_count = DB::table('reports')->count()	;
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
                        <a href="{{ route('report.index') }}">
							Báo Cáo
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
					<h1>Tạo mới... <small>Gửi một báo cáo của bạn đến Sky</small></h1>
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
						Báo Cáo Của Tôi
						<div class="panel-tools">
							<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
							</a>
						</div>
					</div>
                    
					<div class="panel-body">

						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-success">
									<button data-dismiss="alert" class="close">
										&times;
									</button>
									<i class="fa fa-info-circle"></i>
									&nbsp;Hiện có [{{ $reports_count }}] báo cáo đang được quản lý bởi Sky. <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bạn có thể thêm mới một báo cáo bằng cách điền thông tin vào biểu mẫu dưới đây.
								</div>
							</div>
                    	</div>
                    	@include('errors.list')
                    	
                        {!! Form::open(['route' => 'report.store', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true] ) !!}
							
							@include('sky.report._form_')

							<div class="row">
								<div class="col-md-12 space20">
									<button type="submit" class="btn btn-success">
										Thêm Mới <i class="fa fa-plus"></i>
									</button>
								</div>
							</div>

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
	<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@stop

@section('include-script')
	<script>
		jQuery(document).ready(function() {
			Main.init();
            FormElements.init();
		});
	</script>
@stop

