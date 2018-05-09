@extends('layouts.master')

@section('title')
Ruangan
@endsection

@section('main_menu')
<a href="{{action('RuanganController@viewRuangan')}}">Ruangan</a>
@endsection

@section('ruangan_active')
style="background-color: #576574"
@endsection

@section('sub_menu')
<a href="{{action('RuanganController@viewPinjam')}}">
	<i class="fas fa-angle-right" style="font-size: 20px; padding: 0px 10px 0px 10px"></i> Pinjam
</a>
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="{{url('css/date.css')}}">

<div class="container">
	<form id="pinjam-form" action="{{action('RuanganController@postPinjam')}}" method="post">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-md-2">
				<h2>Ruangan</h2>
				<h1 style="font-weight: bold">IF-105</h1>
			</div>
			<div class="col-md-4">
				<h2>Form Peminjaman</h2>
				<div class="form-group" style="padding: 15px 0px 10px 0px">
					<label for="email" style="padding-bottom: 5px">Judul Kegiatan</label>
					<input style="height: 60px" type="text" class="form-control" id="email" placeholder="Masukkan judul kegiatan" name="judul" required>
				</div>
				{{-- <div class="form-group">
					<label for="pwd" style="padding-bottom: 5px">Deskripsi Kegiatan</label>
					<textarea style="height: 190px" type="text" class="form-control" id="pwd" placeholder="Tuliskan deskripsi kegiatan" name="deskripsi" required></textarea>
				</div> --}}
				<div class="form-group" style="margin-top: 25px">
					<label for="pwd" style="padding-bottom: 5px">Surat Permohonan</label>
					<input style="" type="file" class="form-control" id="pwd" placeholder="Tuliskan deskripsi kegiatan" name="deskripsi" required></input>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group" style="margin-top: 78px">
					<label for="pwd" style="padding-bottom: 5px">Tanggal Peminjaman</label>
					{{-- Date --}}
					<div ng-app="app">
						<div ng-controller="MainController">
							<div class="wrapp">
								<flex-calendar options="options" events="events"></flex-calendar>
							</div>
						</div>
					</div>
					{{-- End Date --}}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-9">
				<button style="width: 100%; padding: 10px; font-size: 20px; font-weight: bold" type="submit" class="btn btn-success">Ajukan Permohonan</button>	
			</div>
		</div>
	</form>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-translate/2.7.2/angular-translate.js"></script>
<script type="text/javascript" src="{{url('js/date.js')}}"></script>

<script type="text/javascript">
	$(document).ready(function () {

    $("#pinjam-form").validate({
        rules: {
            "judul": {
                required: true
            },
            "deskripsi": {
                required: true
            },
        },
        submitHandler: function (form) {
            var formData = $(form).serialize();
            $.ajax({
                url: "bs_client_function.php?action=new_b",
                type: "post",
                data: formData,
                beforeSend: function () {

                },
                success: function (data) {

                }
            });
        }
    });

});
</script>

@endsection