@extends('app')

<?php 	$thiet_bi_count_by_nhom = DB::table('thiet_bis')
									->leftJoin('loais', 'thiet_bis.loai_id', '=', 'loais.id')
									->leftJoin('chung_loais', 'loais.chung_loai_id', '=', 'chung_loais.id' )
									->where('nhom_id', '=', $nhom->id)->count()	; 
		$thiet_bi_all = DB::table('thiet_bis')
									->leftJoin('loais', 'thiet_bis.loai_id', '=', 'loais.id')
									->leftJoin('chung_loais', 'loais.chung_loai_id', '=', 'chung_loais.id' )
									->leftJoin('nhoms', 'chung_loais.nhom_id', '=', 'nhoms.id')
									->count()	;
		$colors = ['#34495e', '#e74c3c', '#9D8D8F', '#F76B6B', '#57B5CC', '#F9964B', '#81A187', '#A2B4C5', '#4E5B6B', '#3E8ECC', '#CDB082', '#C33938', '#807E85', '#8DADC7'];
?>

@section('include-top')
	<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
	<link href="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css') }}" rel="stylesheet"/>
	<link rel="stylesheet" href="{{ asset('assets/plugins/jQRangeSlider/css/classic-min.css') }}"/> 
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
					<h1>{{ $nhom->ten_nhom }} <small>Bao gồm {{ $nhom->chungLoais()->count() }} hạng mục </small></h1>
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
						<i class="fa clip-clip"></i>
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
									&nbsp;Hiện có {{ $thiet_bi_count_by_nhom }} phương tiện thuộc nhóm {{ $nhom->ten_nhom }}, trên tổng số {{ $thiet_bi_all }} phương tiện Sky đang quản lý.
								</div>
							</div>
							@foreach($nhom->chungLoais as $chung_loai)
								
								<a href="{{ route('nhom.chungloai.show', [$nhom->slug, $chung_loai->slug]) }}">
									<div class="circular-bar col-xs-12 col-sm-6 col-md-3">
										<input type="text" class="dial" data-fgColor="{{ $colors[rand(0, count($colors)-1)] }}" data-width="160" data-height="160" data-linecap="round"  value="{{ DB::table('thiet_bis')
										->leftJoin('loais', 'thiet_bis.loai_id', '=', 'loais.id')
										->where('chung_loai_id', '=', $chung_loai->id)->count() }}" >
										<div class="circular-bar-content">
											{{ $chung_loai->ten_chung_loai }}
											<label></label>
										</div>
									</div>
								</a>

								{{-- <div class="col-xs-12 col-sm-6 col-md-3  text-center">									
									<h4><a style="color:#555555;font-family: 'Roboto', sans-serif;text-decoration:none;" href="{{ route('nhom.chungloai.show', [$nhom->slug, $chung_loai->slug]) }}">{{ $chung_loai->ten_chung_loai }}</a></h4>
									<input class="knob" data-width="150" data-min="0" data-max="{{ $thiet_bi_total }}" value="{{ DB::table('thiet_bis')
									->leftJoin('loais', 'thiet_bis.loai_id', '=', 'loais.id')
									->where('chung_loai_id', '=', $chung_loai->id)->count() }}" data-readOnly=true data-skin="tron" data-thickness=".15" data-fgColor="{{ $colors[rand(0, count($colors)-1)] }}">
								</div> --}}

							@endforeach	
                        </div>
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
      
  			// Animate Knob
  			$('.dial').each(function () { 

			    var elm = $(this);
	          	var color = elm.attr("data-fgColor");  
	          	var perc = elm.attr("value");  
	 
	          	elm.knob({ 
	               'value': 0, 
	                'min':0,
	                'max':{{ $thiet_bi_count_by_nhom }},
	                'skin':'tron',
	                'readOnly':true,
	                'thickness':.1,
	                'dynamicDraw': true,
	                'displayInput':false
	          	});

	          	$({value: 0}).animate({ value: perc }, {
	              	duration: 1000,
	              	easing: 'swing',
	              	progress: function () { elm.val(Math.ceil(this.value)).trigger('change') }
	          	});

	          	//circular progress bar color
	          	$(this).append(function() {
	              	elm.parent().parent().find('.circular-bar-content').css('color',color);
	              	elm.parent().parent().find('.circular-bar-content label').text(perc);
	          	});

	        });
   

		});
	</script>
@stop