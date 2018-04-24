@extends('layouts.master')

@section('title')
Peminjaman
@endsection

@section('main_menu')
Peminjaman
@endsection

@section('sub_menu')
<i class="fas fa-angle-right" style="font-size: 20px; padding: 0px 10px 0px 10px"></i> Lihat Persetujuan
@endsection

@section('content')
<div class="container">
	<div class="row" style="margin: 20px">
		<div class="col-md-12" align="center">
			<button style="font-weight: bold; font-size: 15px" class="btn btn-success"><i class="fas fa-print" style="padding-right: 10px"></i>Cetak Dokumen</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" align="center">
			<iframe src="https://docs.google.com/document/d/e/2PACX-1vTdKUDUHlO9ZJ521cvIYxD_0KabvDgotblXX6NQxDDw3cc2qoTpex_zQrgGT_El0GSZ8Y-glRIMujYL/pub?embedded=true" style="width:850px; height:1095px;" frameborder="0"></iframe>
		</div>
	</div>
	
</div>
@endsection