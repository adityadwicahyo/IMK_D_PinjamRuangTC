@extends('layouts.master')

@section('title')
Profile
@endsection

@section('main_menu')
<a href="{{action('ProfileController@viewProfile')}}">Profile</a>
@endsection

@section('sub_menu')
<a href="{{action('ProfileController@viewEditProfile')}}">
	<i class="fas fa-angle-right" style="font-size: 20px; padding: 0px 10px 0px 10px"></i> Edit
</a>
@endsection

@section('content')
<style type="text/css">
	.choose_file {
    position: relative;
    display: inline-block;   
    font: normal 14px Myriad Pro, Verdana, Geneva, sans-serif;
    color: #7f7f7f;
    margin-top: 2px;
    background: white
}
.choose_file input[type="file"]{
    -webkit-appearance:none; 
    position:absolute;
    top:0;
    left:0;
    opacity:0;
    width: 100%;
    height: 100%;
}
</style>
<div class="row">
	<div class="col-md-3">
		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile" align="center">
				<img class="profile-user-img img-responsive img-circle" style="width: 600px" src="{{url('adminlte/dist/img/user2-160x160.jpg')}}" alt="User profile picture">
				<div class="choose_file">
					<button type="button" class="btn btn-primary" style="margin-top: 15px">Unggah Gambar</button>
					<input name="img" type="file" accept="image/*" />
				</div>
				{{-- <h3 class="profile-username text-center">Nina Mcintire</h3> --}}
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
		<!-- /.box -->
	</div>
	<!-- /.col -->
	<div class="col-md-9">
		<div class="nav-tabs-custom box box-primary">
			<div class="tab-content">
				<div class="active tab-pane" id="settings">
					<form class="form-horizontal" action="/profile" method="post">
						{{ csrf_field() }}
						<h3 style="margin: 10px 0 20px 25px">Informasi Akun</h3>
						<div class="form-group">
							<label for="inputEmail" class="col-sm-3 control-label">Email</label>

							<div class="col-sm-8">
								<input type="email" class="form-control" id="inputEmail" placeholder="Email" value="adityadwicahyo@gmail.com" required>
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Password</label>

							<div class="col-sm-8">
								<input type="password" class="form-control" id="inputEmail" placeholder="Password">
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Konfirmasi Password</label>

							<div class="col-sm-8">
								<input type="password" class="form-control" id="inputEmail" placeholder="Konfirmasi Password">
							</div>	
						</div>
						<hr>
						<h3 style="margin: 10px 0 20px 35px">Informasi Profil</h3>
						<div class="form-group">
							<label for="inputEmail" class="col-sm-3 control-label">Nama Depan</label>

							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputEmail" placeholder="Nama Depan" value="Aditya" required>
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Nama Belakang</label>

							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputEmail" placeholder="Nama Belakang" value="Dwicahyo" required>
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Tanggal Lahir</label>

							<div class="col-sm-8">
								<input type="date" class="form-control" id="inputEmail" placeholder="Tanggal Lahir" value="1997-04-20" required>
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Jenis Kelamin</label>
							<div class="col-sm-8" style="padding-top: 5px">
								<input type="radio" name="optionsRadios" id="optionsRadios1" value="male" checked>
								Laki-laki
								<input style="margin-left: 20px" type="radio" name="optionsRadios" id="optionsRadios1" value="female">
								Perempuan
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Tentang</label>
							<div class="col-sm-8">
								<textarea type="text" class="form-control" id="inputEmail" placeholder="Tentang">Saya adalah seorang mahasiswa. Saya kuliah di Informatika ITS Surabaya.</textarea>
							</div>
						</div>
						<hr>
						<h3 style="margin: 10px 0 20px 35px">Informasi Kontak</h3>
						<div class="form-group">
							<label for="inputEmail" class="col-sm-3 control-label">Nomor Telepon</label>
							<div class="col-sm-1" style="padding-right: 0px">
								<input type="tel" class="form-control" id="inputEmail" value="+62 " readonly="readonly">
								
							</div>
							<div class="col-sm-3" style="padding-left: 0px">
								<input type="tel" class="form-control" id="inputEmail" placeholder="Nomor Telepon" value="123 456 789" required>
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Alamat</label>

							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputEmail" placeholder="Alamat" value="Jalan Joko Susilo No. 70" required>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-8" style="margin-top: 10px; margin-left: 205px">
								<button style="width: 515px; font-size: 15px" type="submit" class="btn btn-success">Perbarui</button>
							</div>
						</div>
					</form>
				</div>
				<!-- /.tab-pane -->
			</div>
		</div>
		<!-- /.nav-tabs-custom -->
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->
@endsection