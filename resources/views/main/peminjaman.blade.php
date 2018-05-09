@extends('layouts.master')

@section('title')
Peminjaman
@endsection

@section('peminjaman_active')
style="background-color: #576574"
@endsection

@section('main_menu')
<a href="{{action('PeminjamanController@viewPeminjaman')}}">Peminjaman</a>
@endsection

@section('content')
<div style="background-color: white; margin: 10px 10px 15px 10px">
	<div style="display: inline-block; background-color: #27ae60; padding: 15px; color: white">
		<p style="font-size: 30px; vertical-align: middle; margin-bottom: 0px">IF-105</p>
		<p style="font-size: 20px; vertical-align: middle; margin-bottom: 0px">21 Mei 2018</p>
	</div>
	<div style="display: inline-block; padding-left: 20px">
		<p style="font-size: 25px; vertical-align: middle; margin-bottom: 0px; padding-bottom: 10px">Pelatihan Laravel HMTC</p>
		<p style="font-size: 17px; vertical-align: middle; margin-bottom: 0px; font-weight: bold">Status : <span style="color: #27ae60"><i class="far fa-check-circle"></i> Telah Disetujui</span></p>
	</div>
	<div style="float: right; padding-top: 5px">
		<a href="{{action('PeminjamanController@viewLihatPermohonan')}}" class="btn btn-primary" style="margin: 5px">Lihat Permohonan</a>
		<br>
		<a href="{{action('PeminjamanController@viewLihatPersetujuan')}}" class="btn btn-warning" style="margin: 5px;">Lihat Persetujuan</a>
	</div>
</div>
<div style="background-color: white; margin: 10px 10px 15px 10px">
	<div style="display: inline-block; background-color: #e74c3c; padding: 15px; color: white">
		<p style="font-size: 30px; vertical-align: middle; margin-bottom: 0px">Aula</p>
		<p style="font-size: 20px; vertical-align: middle; margin-bottom: 0px">21 Mei 2018</p>
	</div>
	<div style="display: inline-block; padding-left: 20px">
		<p style="font-size: 25px; vertical-align: middle; margin-bottom: 0px; padding-bottom: 10px">Pelatihan Laravel HMTC</p>
		<p style="font-size: 17px; vertical-align: middle; margin-bottom: 0px; font-weight: bold">Status : <span style="color: #e74c3c"><i class="far fa-times-circle"></i> Ditolak</span></p>
	</div>
	<div style="float: right; padding-top: 5px">
		<button class="btn btn-secondary disabled" style="margin: 5px">Lihat Permohonan</button>
		<br>
		<button class="btn btn-secondary disabled" style="margin: 5px;">Lihat Persetujuan</button>
	</div>
</div>
<div style="background-color: white; margin: 10px 10px 15px 10px">
	<div style="display: inline-block; background-color: #3498db; padding: 15px; color: white">
		<p style="font-size: 30px; vertical-align: middle; margin-bottom: 0px">IF-105</p>
		<p style="font-size: 20px; vertical-align: middle; margin-bottom: 0px">21 Mei 2018</p>
	</div>
	<div style="display: inline-block; padding-left: 20px">
		<p style="font-size: 25px; vertical-align: middle; margin-bottom: 0px; padding-bottom: 10px">Pelatihan Laravel HMTC</p>
		<p style="font-size: 17px; vertical-align: middle; margin-bottom: 0px; font-weight: bold">Status : <span style="color: #3498db"><i class="far fa-clock"></i> Menunggu Persetujuan</span></p>
	</div>
	<div style="float: right; padding-top: 5px">
		<a href="{{action('PeminjamanController@viewLihatPermohonan')}}" class="btn btn-primary" style="margin: 5px">Lihat Permohonan</a>
		<br>
		<button class="btn btn-secondary disabled" style="margin: 5px;">Lihat Persetujuan</button>
	</div>
</div>
<div style="background-color: white; margin: 10px 10px 15px 10px">
	<div style="display: inline-block; background-color: #bdc3c7; padding: 15px; color: white">
		<p style="font-size: 30px; vertical-align: middle; margin-bottom: 0px">IF-105</p>
		<p style="font-size: 20px; vertical-align: middle; margin-bottom: 0px">21 Mei 2018</p>
	</div>
	<div style="display: inline-block; padding-left: 20px">
		<p style="font-size: 25px; vertical-align: middle; margin-bottom: 0px; padding-bottom: 10px">Pelatihan Laravel HMTC</p>
		<p style="font-size: 17px; vertical-align: middle; margin-bottom: 0px; font-weight: bold">Status : <span style="color: #bdc3c7"><i class="far fa-circle"></i> Selesai</span></p>
	</div>
	<div style="float: right; padding-top: 5px">
		<button class="btn btn-secondary disabled" style="margin: 5px">Lihat Permohonan</button>
		<br>
		<button class="btn btn-secondary disabled" style="margin: 5px;">Lihat Persetujuan</button>
	</div>
</div>


@endsection