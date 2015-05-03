@extends('app')

<?php
$reports_count = DB::table('reports')->count()	;
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
						<i class="clip-grid-6"></i>
						<a href="{{ url('/home') }}"> Trang Chính </a>
					</li>
					<li class="active">
						Báo Cáo
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
					<h1>Báo cáo <small>tổng hợp các báo cáo được gửi đến Sky</small></h1>
				</div>
				<!-- end: PAGE TITLE & BREADCRUMB -->
			</div>
		</div>
		<!-- end: PAGE HEADER -->
		<!-- start: PAGE CONTENT -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="clip clip-clip"></i>
						Bảng Tổng Hợp
						<div class="panel-tools">
							<a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
						</div>
					</div>
					<div class="panel-body page-nhom-chungloai-loai-thietbi-text">
						<div class="row">
							<div class="col-md-12 space20">
								<a class="btn btn-success" href="{{ route('report.create') }}" role="button">
								Thêm Mới <i class="fa fa-plus"></i>
							</a>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover" id="sample_2">
								<thead>
									<tr>
										<th >Tiêu Đề</th>
										<th >Mô tả</th>
										<th class="text-center">Thời Gian</th>
										<th class="text-center hidden-xs">Nhóm</th>
										<th class="text-center">Tag</th>
										<th class="text-center">Liên kết</th>
									</tr>
								</thead>
								<tbody>
									@foreach($reports as $report)
										<tr>
											<td>{{ $report->title }}</td>
											<td>{{ $report->desc }}</td>
											<td class="text-center">{{ $report->timeline->slug }}</td>
											<td class="text-center hidden-xs">{{ $report->category->category }} </td>
											<td class="text-center">{{ $report->tag ? $report->tag : '-' }} </td>
											<td class="text-center"><a href="{{ asset(str_replace(storage_path(), '' , $report->path)) }}"> Tải về </a></td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- end: PAGE CONTENT-->
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
		});
	</script>
@stop