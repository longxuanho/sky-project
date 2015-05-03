@extends('app')

<?php 	
		// So luon thiet bi theo chung nhom
		$thiet_bi_total = DB::table('thiet_bis')
									->leftJoin('loais', 'thiet_bis.loai_id', '=', 'loais.id')
									->leftJoin('chung_loais', 'loais.chung_loai_id', '=', 'chung_loais.id' )
									->where('nhom_id', '=', $nhom->id)->count()	;
		$thiet_bi_count_by_chung_loai = DB::table('thiet_bis')
									->leftJoin('loais', 'thiet_bis.loai_id', '=', 'loais.id')
									->where('chung_loai_id', '=', $chung_loai->id)->count()	;
		$colors = ['#34495e', '#e74c3c', '#F5A1A2', '#9D8D8F', '#F76B6B', '#57B5CC', '#F9964B', '#81A187', '#A2B4C5', '#4E5B6B', '#3E8ECC', '#CDB082', '#AEB1B0', '#C33938', '#807E85', '#8DADC7', '#667145', '#949D7E', '#7A889A', '#4D5158', '#F87242',];
?>

@section('include-top')
	<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
	<link href="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css') }}" rel="stylesheet"/>
	<link rel="stylesheet" href="{{ asset('assets/plugins/jQRangeSlider/css/classic-min.css') }}">
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
					<h1>{{ $chung_loai->ten_chung_loai }} <small>Bao gồm {{ $chung_loai->loais()->count() }} hạng mục </small></h1>
				</div>
				<!-- end: PAGE TITLE & BREADCRUMB -->
                
            </div>
		</div>
		<!-- end: PAGE HEADER -->
        
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
                    
					<div class="panel-body">
						
                        <div class="row">
							<div class="col-md-12">
								<div class="alert alert-info">
									<i class="fa fa-info-circle"></i>
									&nbsp;Hiện có [{{ $thiet_bi_count_by_chung_loai }}] phương tiện thuộc chủng loại {{ $chung_loai->ten_chung_loai }}, trên tổng số [{{ $thiet_bi_total }}] phương tiện thuộc nhóm  {{ $nhom->ten_nhom }}. 
								</div>
							</div>
                    	</div>
                        

                        <table class="table table-hover">
                            <tbody>
                                @foreach($chung_loai->loais as $loai)
									<tr>
	                                    <td class="col-md-3 page-nhom-chungloai-loai-text-left">
	                                        <h4><a style="color:#555555;font-family: 'Roboto', sans-serif;text-decoration:none;" href="{{ route('nhom.chungloai.loai.show', [ $nhom->slug, $chung_loai->slug, $loai->slug ]) }}">{{ $loai->ten_loai }}</a></h4>  
	                                    </td>
	                                    <td class="page-nhom-chungloai-loai-text-right">
	                                        {{ $thiet_bi_count_by_loai = DB::table('thiet_bis')
												->leftJoin('loais', 'thiet_bis.loai_id', '=', 'loais.id')
												->where('thiet_bis.loai_id', '=', $loai->id)->count() }}	
	                                    </td>
	                                    <td class="col-md-9">	
	                                        <div class="progress progress-striped active">
	                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ $thiet_bi_count_by_loai }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ ($thiet_bi_count_by_chung_loai > 0) ?  $thiet_bi_count_by_loai/$thiet_bi_count_by_chung_loai*100 : 0 }}%">
	                                                <span class="sr-only"> {{ $thiet_bi_count_by_loai }} phương tiện</span>
	                                            </div>
	                                        </div>
	                                    </td>
	                                </tr>
                                @endforeach                                 
                            </tbody>
                          </table>
                        
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
	<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/jQRangeSlider/jQAllRangeSliders-min.js') }}"></script>
	<script src="{{ asset('assets/plugins/jQuery-Knob/js/jquery.knob.js') }}"></script>
	<script src="{{ asset('assets/js/ui-sliders.js') }}"></script>
	<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@stop

@section('include-script')
	<script>
		jQuery(document).ready(function() {
			Main.init();
            UISliders.init();
		});
	</script>
@stop