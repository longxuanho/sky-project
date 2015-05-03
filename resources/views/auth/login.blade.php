<!DOCTYPE html>

<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Talk Less. Do More!</title>
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
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login example1">
		<br/><br/><br/><br/>
        <div class="main-login col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
<!--			<div class="logo">SKY<i class="clip-clip"></i>NET			</div>-->
			<!-- start: LOGIN BOX -->
			<div class="box-login">
				<h3>Đăng nhập</h3>
				<p>
					Chào mừng đến với Skynet. <br/> Hãy đăng nhập bằng tài khoản của bạn để bắt đầu.
				</p>
				<form class="form-login" role="form" method="POST" action="{{ url('/auth/login') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					@if (count($errors) > 0)
							<div class="alert alert-danger">
								<i class="fa fa-remove-sign"></i> Đã có lỗi xảy ra. Xin vui lòng kiểm tra thông tin bên dưới.
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> Đã có lỗi xảy ra. Xin vui lòng kiểm tra thông tin bên dưới.
					</div>
					<fieldset>
						<div class="form-group">
							<span class="input-icon">	
								<input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
								<i class="fa fa-user"></i> </span>
							<!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
							<!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
						</div>
						<div class="form-group form-actions">
							<span class="input-icon">
								<input type="password" class="form-control password" name="password" placeholder="Mật Khẩu">
								<i class="fa fa-lock"></i>
								<a class="forgot" href="?box=forgot">
									Tôi không nhớ mật khẩu
								</a> </span>
						</div>
						<div class="form-actions">
							<label for="remember" class="checkbox-inline">
								<input type="checkbox" class="grey remember" id="remember" name="remember">
								Giữ tôi đăng nhập
							</label>
							<button type="submit" class="btn btn-bricky pull-right">
								Tiếp tục <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
					</fieldset>
				</form>
			</div>
			<!-- end: LOGIN BOX -->
			<!-- start: FORGOT BOX -->
			<div class="box-forgot">
				<h3>Bạn quên mật khẩu?</h3>
				<p>
				    Xin hãy cung cấp địa chỉ email của bạn
				</p>
				<form class="form-forgot">
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> Đã có lỗi xảy ra. Xin vui lòng kiểm tra thông tin bên dưới.
					</div>
					<fieldset>
						<div class="form-group">
							<span class="input-icon">
								<input type="email" class="form-control" name="email" placeholder="Email">
								<i class="fa fa-envelope"></i> </span>
						</div>
						<div class="form-actions">
							<a href="?box=login" class="btn btn-light-grey go-back">
								<i class="fa fa-arrow-circle-left"></i> Trở về
							</a>
							<button type="submit" class="btn btn-bricky pull-right">
								Tiếp tục <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
					</fieldset>
				</form>
			</div>
			<!-- end: FORGOT BOX -->
			
			<!-- start: COPYRIGHT -->
			{{-- <div class="copyright">
				2015 &copy; Phòng Kỹ Thuật Vật Tư, Tổng Công Ty Tân Cảng Sài Gòn.
			</div> --}}
			<!-- end: COPYRIGHT -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
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
		<script src="{{ asset('assets/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('assets/js/login.js') }}"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>