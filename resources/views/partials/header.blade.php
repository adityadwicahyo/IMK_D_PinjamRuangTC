<header class="main-header">
	<!-- Logo -->
	<a href="{{url('adminlte/index2.html')}}" class="logo">
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
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{url('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Alexander Pierce</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>

		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN MENU</li>

			<li>
				<a href="{{url('adminlte/widgets.html')}}">
					<i class="fas fa-warehouse"></i> <span style="padding-left: 10px">Ruangan</span>
				</a>
			</li>
			<li>
				<a href="{{url('adminlte/widgets.html')}}">
					<i class="fas fa-handshake"></i> <span style="padding-left: 10px">Peminjaman</span>
					<span class="pull-right-container">
						<small class="label pull-right bg-green">new</small>
					</span>
				</a>
			</li>
			<li>
				<a href="{{url('adminlte/widgets.html')}}">
					<i class="fas fa-file-alt" style="font-size: 17px"></i> <span style="padding-left: 17px">Alur</span>
				</a>
			</li>

			<li class="header">SETTING</li>
			<li><a href="#"><i class="fas fa-power-off"></i> <span style="padding-left: 10px">Logout</span></a></li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>