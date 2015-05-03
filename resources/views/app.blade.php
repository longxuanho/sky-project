<?php $navbar_phuong_tiens = App\Nhom::all();
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<!-- start: HEAD -->
	<head>
		<title>Sky Project</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/fonts/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/main-responsive.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/iCheck/skins/all.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/theme_light.css') }}" type="text/css" id="skin_color">
		<link rel="stylesheet" href="{{ asset('assets/css/print.css') }}" type="text/css" media="print">
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		@yield('include-top')
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="footer-fixed">
        <!-- start: HEADER -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!-- start: TOP NAVIGATION CONTAINER -->
			<div class="container">
				<div class="navbar-header">
					<!-- start: RESPONSIVE MENU TOGGLER -->
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="clip-list-2"></span>
					</button>
					<!-- end: RESPONSIVE MENU TOGGLER -->
					<!-- start: LOGO -->
					<a class="navbar-brand" href="{{ url('/') }}">
						{{-- <i class="clip clip-puzzle-3"></i> --}}
						Skynet
					</a>
					<!-- end: LOGO -->
				</div>
				<div class="navbar-tools">
					<!-- start: TOP NAVIGATION MENU -->
					<ul class="nav navbar-right">
						@if (Auth::guest())
							<li><a href="{{ url('/auth/login') }}">Đăng Nhập</a></li>
							<li><a href="{{ url('/auth/register') }}">Đăng Ký</a></li>
						@else
							<!-- start: USER DROPDOWN -->
							<li class="dropdown current-user">
								<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
									<img src="{{ URL::asset('assets/images/avatar-1-small.jpg') }}" class="circle-img" alt="">
									<span class="username">{{ Auth::user()->name }}</span>
									<i class="clip-chevron-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">
											<i class="clip-user-2"></i>
											&nbsp;Hồ Sơ
										</a>
									</li>
									<li>
										<a href="{{ url('/bao-cao') }}">
											<i class="clip-note"></i>
											&nbsp;Báo Cáo Của Tôi
										</a>
	                                </li>
									<li class="divider"></li>
									<li>
										<a href="{{ url('/auth/logout') }}">
											<i class="clip-exit"></i>
											&nbsp;Đăng Xuất
										</a>
									</li>
								</ul>
							</li>
							<!-- end: USER DROPDOWN -->
						@endif

					</ul>                    
					<!-- end: TOP NAVIGATION MENU -->
				</div>
			</div>
			<!-- end: TOP NAVIGATION CONTAINER -->
		</div>
		<!-- end: HEADER -->
        
        
        <!-- start: MAIN CONTAINER -->
		<div class="main-container">
            
           	<!-- NAV BAR -->
            @include('partials.navbar')

			
        
        </div>
        <!-- end: MAIN CONTAINER -->

        <!-- start: MAIN CONTAINER -->
		<div class="main-content">
			<!-- CONTENT -->
			@yield('content')
        </div>
        <!-- end: MAIN CONTAINER -->
        
        <!-- start: FOOTER -->
		<div class="footer clearfix">
			<div class="footer-inner">
				2015 &copy; Phòng Kỹ Thuật Vật Tư, Tổng Công Ty Tân Cảng Sài Gòn.
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>
		<!-- end: FOOTER -->


        
        
        <!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="{{ asset('assets/plugins/jQuery-lib/2.0.3/jquery.min.js') }}"></script>
		<!--<![endif]-->
		<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/blockUI/jquery.blockUI.js') }}"></script>
		<script src="{{ asset('assets/plugins/iCheck/jquery.icheck.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js') }}"></script>
		<script src="{{ asset('assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js') }}"></script>
		<script src="{{ asset('assets/plugins/less/less-1.5.0.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js') }}"></script>
		<script src="{{ asset('assets/js/main.js') }}"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		@yield('include-bot')
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		
		<!-- start: SCRIPT FOR THIS PAGE ONLY -->
		@yield('include-script')
		<!-- end: SCRIPT FOR THIS PAGE ONLY -->
		
    </body>
</html>


