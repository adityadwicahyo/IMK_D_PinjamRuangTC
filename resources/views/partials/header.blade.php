<header class="main-header">
	<!-- Logo -->
	<a href="{{action('RuanganController@viewRuangan')}}" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>SI</b>PR</span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>SI</b>PinjamRuang</span>
	</a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
	</nav>
</header>

<!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<a href="{{action('ProfileController@viewProfile')}}">
			<div class="user-panel">
				<div class="pull-left image">
					<img src="{{url('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<br>
					<p>Joko Susilo</p>
				</div>
			</div>
		</a>
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN MENU</li>

			<li @yield('ruangan_active')>
				<a href="{{action('RuanganController@viewRuangan')}}">
					<i class="fas fa-warehouse"></i> <span style="padding-left: 10px">Ruangan</span>
				</a>
			</li>
			<li @yield('peminjaman_active')>
				<a href="{{action('PeminjamanController@viewPeminjaman')}}">
					<i class="fas fa-handshake"></i> <span style="padding-left: 10px">Peminjaman</span>
					<span class="pull-right-container">
						@if ($notification->setuju > 0)
						    <small class="label pull-right bg-green">{{$notification->setuju}}</small>
						@endif
						@if ($notification->tolak > 0)
						    <small class="label pull-right bg-red">{{$notification->tolak}}</small>
						@endif
					</span>
				</a>
			</li>
			<li @yield('alur_active')>
				<a href="{{action('AlurController@viewAlur')}}">
					<i class="fas fa-file-alt" style="font-size: 17px"></i> <span style="padding-left: 17px">Alur</span>
				</a>
			</li>
			@if(session()->has('email')&&session('email')=="admin@gmail.com")
			<li @yield('admin_active')>
				<a href="{{url('admin')}}">
					<i class="fab fa-black-tie" style="font-size: 17px"></i> <span style="padding-left: 17px">Persetujuan</span>
					<span class="pull-right-container">
						@if ($notification->tunggu > 0)
						<small class="label pull-right" style="background-color: #3498db">1</small>
						@endif
					</span>
				</a>
			</li>
			@endif
			<li class="header">SETTING</li>
			<li><a href="{{action('LoginController@viewLogin')}}"><i class="fas fa-power-off"></i> <span style="padding-left: 10px">Logout</span></a></li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>