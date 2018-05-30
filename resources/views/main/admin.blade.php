@extends('layouts.master')
@section('title')
Admin
@endsection

@section('admin_active')
style="background-color: #576574"
@endsection

@section('main_menu')
<a href="{{action('AdminController@viewAdmin')}}">Admin</a>
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
@if($errors->any('Success'))
<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-check"></i> Success!</h4>
	{{ $errors->first('Success')}}
</div>
@endif
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
	<div style="display: inline-block; background-color: #27ae60; padding: 15px; color: white">
		<div>
			<img src="{{url('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" style="width: 20px;">
			<p style="display: inline-block; margin: 0px; font-weight: bold; margin-left: 5px"> Joko Susilo</p>
		</div>
		<hr style="margin: 5px 0px 2px 0px">
		<p style="font-size: 25px; vertical-align: middle; margin-bottom: 0px">IF-105</p>
		<p style="font-size: 15px; vertical-align: middle; margin-bottom: 0px">21 Mei 2018</p>
		<p style="font-size: 10px; vertical-align: middle; margin-bottom: 0px">10.00-11.00</p>
	</div>
	<div style="display: inline-block; padding-left: 20px">
		<p style="font-size: 25px; margin-bottom: 0px; padding-bottom: 10px">Pelatihan Laravel HMTC</p>
		<p style="font-size: 17px; margin-bottom: 0px; font-weight: bold">Status : <span style="color: #27ae60"><i class="far fa-check-circle"></i> Telah Disetujui</span></p>
	</div>
	<div style="float: right; padding-top: 15px">
		<a href="{{action('AdminController@viewAdminPermohonan')}}" class="btn btn-primary" style="margin: 5px">Lihat Permohonan</a>
		<br>
		<form>
			<button href="{{action('PeminjamanController@viewLihatPersetujuan')}}" class="btn btn-secondary disabled" style="margin: 5px;">Setujui</button>
			<button style="display: inline-block;" href="{{action('PeminjamanController@viewLihatPersetujuan')}}" class="btn btn-secondary disabled">Tolak</button>
		</form>
	</div>
</div>
<div style="background-color: white; margin: 10px 10px 15px 10px" class="filterDiv tolak">
	<div style="display: inline-block; background-color: #e74c3c; padding: 15px; color: white">
		<div>
			<img src="{{url('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" style="width: 20px;">
			<p style="display: inline-block; margin: 0px; font-weight: bold; margin-left: 5px"> Joko Susilo</p>
		</div>
		<hr style="margin: 5px 0px 2px 0px">
		<p style="font-size: 25px; vertical-align: middle; margin-bottom: 0px">Aula</p>
		<p style="font-size: 15px; vertical-align: middle; margin-bottom: 0px">21 Mei 2018</p>
		<p style="font-size: 10px; vertical-align: middle; margin-bottom: 0px">10.00-11.00</p>
	</div>
	<div style="display: inline-block; padding-left: 20px">
		<p style="font-size: 25px; vertical-align: middle; margin-bottom: 0px; padding-bottom: 10px">Pelatihan Laravel HMTC</p>
		<p style="font-size: 17px; vertical-align: middle; margin-bottom: 0px; font-weight: bold">Status : <span style="color: #e74c3c"><i class="far fa-times-circle"></i> Ditolak</span></p>
	</div>
	<div style="float: right; padding-top: 5px">
		<a href="{{action('AdminController@viewAdminPermohonan')}}" class="btn btn-primary" style="margin: 5px">Lihat Permohonan</a>
		<br>
		<form>
			<button href="{{action('PeminjamanController@viewLihatPersetujuan')}}" class="btn btn-secondary disabled" style="margin: 5px;">Setujui</button>
			<button style="display: inline-block;" href="{{action('PeminjamanController@viewLihatPersetujuan')}}" class="btn btn-secondary disabled">Tolak</button>
		</form>
	</div>
</div>
<div style="background-color: white; margin: 10px 10px 15px 10px" class="filterDiv tunggu">
	<div style="display: inline-block; background-color: #3498db; padding: 15px; color: white">
		<div>
			<img src="{{url('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" style="width: 20px;">
			<p style="display: inline-block; margin: 0px; font-weight: bold; margin-left: 5px"> Joko Susilo</p>
		</div>
		<hr style="margin: 5px 0px 2px 0px">
		<p style="font-size: 25px; vertical-align: middle; margin-bottom: 0px">IF-105</p>
		<p style="font-size: 15px; vertical-align: middle; margin-bottom: 0px">21 Mei 2018</p>
		<p style="font-size: 10px; vertical-align: middle; margin-bottom: 0px">10.00-11.00</p>
	</div>
	<div style="display: inline-block; padding-left: 20px">
		<p style="font-size: 25px; vertical-align: middle; margin-bottom: 0px; padding-bottom: 10px">Pelatihan Laravel HMTC</p>
		<p style="font-size: 17px; vertical-align: middle; margin-bottom: 0px; font-weight: bold">Status : <span style="color: #3498db"><i class="far fa-clock"></i> Menunggu Persetujuan</span></p>
	</div>
	<div style="float: right; padding-top: 5px">
		<a href="{{action('AdminController@viewAdminPermohonan')}}" class="btn btn-primary" style="margin: 5px">Lihat Permohonan</a><br>
		<a href="{{url('/admin/edit/permohonan')}}" class="btn btn-info" style="margin: 5px">Edit Permohonan</a>
		<br>
		{{-- <form> --}}
			<button class="btn btn-success" style="margin: 5px;" data-toggle="modal" data-target="#setujuModal">Setujui</button>
			<button style="display: inline-block;" class="btn btn-danger" data-toggle="modal" data-target="#tolakModal">Tolak</button>
		{{-- </form> --}}
	</div>
</div>
<div style="background-color: white; margin: 10px 10px 15px 10px" class="filterDiv selesai">
	<div style="display: inline-block; background-color: #bdc3c7; padding: 15px; color: white">
		<div>
			<img src="{{url('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" style="width: 20px;">
			<p style="display: inline-block; margin: 0px; font-weight: bold; margin-left: 5px"> Joko Susilo</p>
		</div>
		<hr style="margin: 5px 0px 2px 0px">
		<p style="font-size: 25px; vertical-align: middle; margin-bottom: 0px">IF-105</p>
		<p style="font-size: 15px; vertical-align: middle; margin-bottom: 0px">21 Mei 2018</p>
		<p style="font-size: 10px; vertical-align: middle; margin-bottom: 0px">10.00-11.00</p>
	</div>
	<div style="display: inline-block; padding-left: 20px">
		<p style="font-size: 25px; vertical-align: middle; margin-bottom: 0px; padding-bottom: 10px">Pelatihan Laravel HMTC</p>
		<p style="font-size: 17px; vertical-align: middle; margin-bottom: 0px; font-weight: bold">Status : <span style="color: #bdc3c7"><i class="far fa-circle"></i> Selesai</span></p>
	</div>
	<div style="float: right; padding-top: 5px">
		<a href="{{action('AdminController@viewAdminPermohonan')}}" class="btn btn-primary" style="margin: 5px">Lihat Permohonan</a>
		<br>
		<form>
			<button href="{{action('PeminjamanController@viewLihatPersetujuan')}}" class="btn btn-secondary disabled" style="margin: 5px;">Setujui</button>
			<button style="display: inline-block;" href="{{action('PeminjamanController@viewLihatPersetujuan')}}" class="btn btn-secondary disabled">Tolak</button>
		</form>
	</div>
</div>

<!-- Modal Setuju -->
<div class="modal fade" id="setujuModal" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Konfirmasi</h4>
			</div>
			<div class="modal-body">
				<p>Apakah Anda yakin <span style="color: green; font-weight: bold">menyetujui</span> permohonan peminjaman ini?</p>
			</div>
			<div class="modal-footer">
				<form action="/admins" method="post">
					{{ csrf_field() }}
					<input type="hidden" value="setuju" name="konfirmasi">
					<button type="submit" class="btn btn-default">Ya</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal Tolak -->
<div class="modal fade" id="tolakModal" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Konfirmasi</h4>
			</div>
			<div class="modal-body">
				<p>Apakah Anda yakin <span style="color: red; font-weight: bold">menolak</span> permohonan peminjaman ini?</p>
			</div>
			<div class="modal-footer">
				<form action="/admins" method="post">
					{{ csrf_field() }}
					<input type="hidden" value="tolak" name="konfirmasi">
					<button type="submit" class="btn btn-default">Ya</button>
				</form>
			</div>
		</div>
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