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
<style>
.filterDiv {
	display: none;
}

.show {
	display: block;
}
</style>

<div id="myBtnContainer" style="margin-left: 10px">
	<h4 style="font-weight: bold">Filter :</h4>
	<button class="btn btn-default active" onclick="filterSelection('all')"> Show all</button>
	<button class="btn btn-success" onclick="filterSelection('setuju')"> Telah Disetuju</button>
	<button class="btn btn-danger" onclick="filterSelection('tolak')"> Ditolak</button>
	<button class="btn btn-primary" onclick="filterSelection('tunggu')"> Menunggu Persetujuan</button>
	<button class="btn btn-default" style="background-color: grey; color: white" onclick="filterSelection('selesai')"> Selesai</button>
	<hr style="border-color: #bdc3c7">
</div>

<div style="background-color: white; margin: 10px 10px 15px 10px" class="filterDiv setuju">
	<div style="display: inline-block; background-color: #27ae60; padding: 15px; color: white" class="setuju">
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
<div style="background-color: white; margin: 10px 10px 15px 10px" class="filterDiv tolak">
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
<div style="background-color: white; margin: 10px 10px 15px 10px" class="filterDiv tunggu">
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
<div style="background-color: white; margin: 10px 10px 15px 10px" class="filterDiv selesai">
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
<script>
	filterSelection("all")
	function filterSelection(c) {
		var x, i;
		x = document.getElementsByClassName("filterDiv");
		if (c == "all") c = "";
		for (i = 0; i < x.length; i++) {
			w3RemoveClass(x[i], "show");
			if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
		}
	}

	function w3AddClass(element, name) {
		var i, arr1, arr2;
		arr1 = element.className.split(" ");
		arr2 = name.split(" ");
		for (i = 0; i < arr2.length; i++) {
			if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
		}
	}

	function w3RemoveClass(element, name) {
		var i, arr1, arr2;
		arr1 = element.className.split(" ");
		arr2 = name.split(" ");
		for (i = 0; i < arr2.length; i++) {
			while (arr1.indexOf(arr2[i]) > -1) {
				arr1.splice(arr1.indexOf(arr2[i]), 1);     
			}
		}
		element.className = arr1.join(" ");
	}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function(){
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	});
}
</script>

@endsection