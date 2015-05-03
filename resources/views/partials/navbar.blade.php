<!-- start: NAVBAR CONTENT -->
<div class="navbar-content">
	<!-- start: SIDEBAR -->
	<div class="main-navigation navbar-collapse collapse">
		<!-- start: MAIN MENU TOGGLER BUTTON -->
		<div class="navigation-toggler">
			<i class="clip-chevron-left"></i>
			<i class="clip-chevron-right"></i>
		</div>
		<!-- end: MAIN MENU TOGGLER BUTTON -->
		<!-- start: MAIN NAVIGATION MENU -->
		<ul class="main-navigation-menu">
			<li class="{{ Request::is('home') ? 'active open' : '' }}">
				<a href="{{ url('/home') }}"><i class="clip-home-3"></i>
					<span class="title"> Trang Chính </span> {!! Request::is('home') ? '<span class="selected"></span>' : '' !!} 
				</a>
			</li>
			<li class="{{ Request::is('phuong-tien/*') ? 'active open' : '' }}">
				<a href="javascript:void(0)"><i class="clip-grid-6"></i>
					<span class="title"> Phương Tiện </span><i class="icon-arrow"></i>
					<span class="selected"></span>
				</a>
				<ul class="sub-menu">
					@foreach($navbar_phuong_tiens as $navbar_phuong_tien)
						<li class="{{ Request::is('phuong-tien/'. $navbar_phuong_tien->slug. '*') ? 'active' : '' }}">
							<a href="{{ route('nhom.show', $navbar_phuong_tien->slug ) }}">
								<span class="title"> {{ $navbar_phuong_tien->ten_nhom }} </span>
							</a>
						</li>				
					@endforeach
				</ul>
			</li>
            <li>
				<a href="#"><i class="clip-settings"></i>
					<span class="title">Vật Tư</span>
					<span class="selected"></span>
				</a>
			</li>
			<li class="{{ Request::is('bao-cao*') ? 'active open' : '' }}">
				<a href="javascript:;" class="active">
					<i class="clip-attachment-2"></i>
					<span class="title"> Báo Cáo </span>
					<i class="icon-arrow"></i><span class="selected"></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="javascript:;">
							2015 - Quí 1 <i class="icon-arrow"></i>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="#">
									Tháng 1
								</a>
							</li>
							<li>
								<a href="#">
									Tháng 2
								</a>
							</li>
							<li>
								<a href="#">
									Tháng 3
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:;">
							2015 - Quí 2 <i class="icon-arrow"></i>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="#">
									Tháng 4
								</a>
							</li>
							<li>
								<a href="#">
									Tháng 5
								</a>
							</li>
							<li>
								<a href="#">
									Tháng 6
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:;">
							2015 - Quí 3 <i class="icon-arrow"></i>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="#">
									Tháng 7
								</a>
							</li>
							<li>
								<a href="#">
									Tháng 8
								</a>
							</li>
							<li>
								<a href="#">
									Tháng 9
								</a>
							</li>
						</ul>
					</li>
                    <li>
						<a href="javascript:;">
							2015 - Quí 4 <i class="icon-arrow"></i>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="#">
									Tháng 10
								</a>
							</li>
							<li>
								<a href="#">
									Tháng 11
								</a>
							</li>
							<li>
								<a href="#">
									Tháng 12
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
		<!-- end: MAIN NAVIGATION MENU -->
	</div>
	<!-- end: SIDEBAR -->
</div>
<!-- end: NAVBAR CONTENT -->