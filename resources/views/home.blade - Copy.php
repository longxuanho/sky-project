@extends('app')


<?php
$reports_count = DB::table('reports')->count();

$thiet_bi_count_by_tbn = DB::table('thiet_bis')
									->leftJoin('loais', 'thiet_bis.loai_id', '=', 'loais.id')
									->leftJoin('chung_loais', 'loais.chung_loai_id', '=', 'chung_loais.id' )
									->where('nhom_id', '=', 1)->count()	;
$thiet_bi_count_by_xemay = DB::table('thiet_bis')
									->leftJoin('loais', 'thiet_bis.loai_id', '=', 'loais.id')
									->leftJoin('chung_loais', 'loais.chung_loai_id', '=', 'chung_loais.id' )
									->where('nhom_id', '=', 2)->count()	;
$thiet_bi_count_by_tauthuyen = DB::table('thiet_bis')
									->leftJoin('loais', 'thiet_bis.loai_id', '=', 'loais.id')
									->leftJoin('chung_loais', 'loais.chung_loai_id', '=', 'chung_loais.id' )
									->where('nhom_id', '=', 3)->count()	;
$thiet_bi_count_by_tramnguon = DB::table('thiet_bis')
									->leftJoin('loais', 'thiet_bis.loai_id', '=', 'loais.id')
									->leftJoin('chung_loais', 'loais.chung_loai_id', '=', 'chung_loais.id' )
									->where('nhom_id', '=', 4)->count()	; 
$thiet_bi_count_by_vanthang = DB::table('thiet_bis')
									->leftJoin('loais', 'thiet_bis.loai_id', '=', 'loais.id')
									->leftJoin('chung_loais', 'loais.chung_loai_id', '=', 'chung_loais.id' )
									->where('nhom_id', '=', 5)->count()	; 

$thiet_bi_all = DB::table('thiet_bis')
									->leftJoin('loais', 'thiet_bis.loai_id', '=', 'loais.id')
									->leftJoin('chung_loais', 'loais.chung_loai_id', '=', 'chung_loais.id' )
									->leftJoin('nhoms', 'chung_loais.nhom_id', '=', 'nhoms.id')
									->count()	;
?>


@section('content')

<!-- start: PAGE CONTENT -->
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
					Tổng quan
				</li>
				<li class="search-box">
					<form class="sidebar-search">
						<div class="form-group">
							<input type="text" placeholder="Bắt đầu tìm kiếm...">
							<button class="submit">
								<i class="clip-search-3"></i>
							</button>
						</div>
					</form>
				</li>
			</ol>
			<div class="page-header">
				<h1>Tổng Quan <small>thống kê &amp; số liệu tổng hợp </small></h1>
			</div>
			<!-- end: PAGE TITLE & BREADCRUMB -->
		</div>
	</div>
	<!-- end: PAGE HEADER -->
	<!-- start: PAGE CONTENT -->
	<div class="row">
		<div class="col-sm-4">
			<div class="core-box">
				<div class="heading">
					<i class="clip-database circle-icon circle-bricky"></i>
					<h2>Phương Tiện</h2>
				</div>
				<div class="content">
					Với cơ sở dữ liệu bao gồm [{{ $thiet_bi_all }}]+ phương tiện, gồm [{{ $thiet_bi_count_by_tbn }}] phương tiện thiết bị nâng, [{{ $thiet_bi_count_by_xemay }}] phương tiện xe-máy, [{{ $thiet_bi_count_by_tramnguon }}] máy phát, [{{ $thiet_bi_count_by_tauthuyen }}] phương tiện tàu thuyền và [{{ $thiet_bi_count_by_vanthang }}] vận thăng.
				</div>
				<a class="view-more" href="#">
					Xem thêm <i class="clip-arrow-right-2"></i>
				</a>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="core-box">
				<div class="heading">
					<i class="clip-clip circle-icon circle-teal"></i>
					<h2>Báo Cáo</h2>
				</div>
				<div class="content">
					Sky hiện đang quản lý [{{ $reports_count }}]+ báo cáo và đang được cập nhật theo từng tuần. Các thuật toán đang được phát triển giúp giảm thời gian xử lý các báo cáo và mang lại những trải nghiệm tuyệt vời nhất. Bạn hãy chờ xem!
				</div>
				<a class="view-more" href="{{ url('/bao-cao') }}">
					Xem thêm <i class="clip-arrow-right-2"></i>
				</a>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="core-box">
				<div class="heading">
					<i class="clip-settings circle-icon circle-green"></i>
					<h2>Vật Tư</h2>
				</div>
				<div class="content">
					Cơ sở dữ liệu về Vật tư đang được phát triển và thử nghiệm. Sẽ sớm được liên kết với cơ sở dữ liệu về Phương tiện của Sky trong thời gian tới. Be right back!
				</div>
				<a class="view-more" href="#">
					Xem thêm <i class="clip-arrow-right-2"></i>
				</a>
			</div>
		</div>
	</div>
</div>

@endsection

@section('include-script')
	<script>
		jQuery(document).ready(function() {
			Main.init();
			Index.init();
		});
	</script> 
@stop
