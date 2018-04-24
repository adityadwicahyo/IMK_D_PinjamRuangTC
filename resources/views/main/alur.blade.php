@extends('layouts.master')

@section('title')
Alur
@endsection

@section('main_menu')
Alur
@endsection

@section('content')
<!-- row -->
<div class="row">
	<div class="col-md-12">
		<!-- The time line -->
		<ul class="timeline">
			<!-- timeline time label -->
			<li class="time-label">
				<span class="bg-red">
					Perizinan
				</span>
			</li>
			<!-- /.timeline-label -->
			<!-- timeline item -->
			<li>
				<i class="fa fa-user bg-aqua"></i>

				<div class="timeline-item">
					<h3 class="timeline-header no-border"> Mengisi form peminjaman di website SIPR</h3>
				</div>
			</li>
			<li>
				<i class="fa fa-user bg-aqua"></i>

				<div class="timeline-item">
					<h3 class="timeline-header no-border">Menunggu permohonan disetujui oleh pihak jurusan. Silahkan melihat pada menu Peminjaman.</h3>
				</div>
			</li>
			<!-- END timeline item -->
			
			<!-- timeline time label -->
			<li class="time-label">
				<span class="bg-green">
					Setelah Disetujui
				</span>
			</li>
			<li>
				<i class="fa fa-user bg-aqua"></i>

				<div class="timeline-item">
					<h3 class="timeline-header no-border"> Setelah disetujui segera cetak bukti persetujuan</h3>
				</div>
			</li>
			<li>
				<i class="fa fa-user bg-aqua"></i>

				<div class="timeline-item">
					<h3 class="timeline-header no-border">H-1 peminjaman ruang, peminjam harus mendatangi TU untuk mengambil kunci.</h3>
				</div>
			</li>
			<!-- /.timeline-label -->
		</ul>
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->

@endsection