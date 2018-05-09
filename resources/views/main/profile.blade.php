@extends('layouts.master')

@section('title')
Alur
@endsection

@section('main_menu')
<a href="{{action('ProfileController@viewEditProfile')}}">Profile</a>
@endsection

@section('content')

@if($errors->any('Success'))
<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-check"></i> Success!</h4>
	{{ $errors->first('Success')}}
</div>
@endif

<div class="row">
	<div class="col-md-3">
		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile" align="center">
				<img class="profile-user-img img-responsive img-circle" style="width: 600px" src="{{url('adminlte/dist/img/user2-160x160.jpg')}}" alt="User profile picture">
				<h3 style="margin-top: 15px" class="profile-username text-center">Joko Susilo</h3>
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
					<a href="/profile/edit" class="btn btn-success" style="margin-left: 700px">Edit Profil</a>
					<form class="form-horizontal">
						<h3 style="margin: 10px 0 20px 25px">Informasi Akun</h3>
						<div class="form-group">
							<label for="inputEmail" class="col-sm-3 control-label">Email</label>

							<div class="col-sm-8" style="margin-top: 5px">
								adityadwicahyo@gmail.com
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Password</label>

							<div class="col-sm-8" style="margin-top: 5px">
								&#9830; &#9830; &#9830; &#9830; &#9830;
							</div>
						</div>
						<hr>
						<h3 style="margin: 10px 0 20px 35px">Informasi Profil</h3>
						<div class="form-group">
							<label for="inputEmail" class="col-sm-3 control-label">Nama</label>

							<div class="col-sm-8" style="margin-top: 5px">
								Joko Susilo
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Tanggal Lahir</label>

							<div class="col-sm-8" style="margin-top: 5px">
								20 April 1997
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Jenis Kelamin</label>
							<div class="col-sm-8" style="margin-top: 5px">
								Laki-laki
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Tentang</label>
							<div class="col-sm-8" style="margin-top: 5px">
								Saya adalah seorang mahasiswa. Saya kuliah di Informatika ITS Surabaya.
							</div>
						</div>
						<hr>
						<h3 style="margin: 10px 0 20px 35px">Informasi Kontak</h3>
						<div class="form-group">
							<label for="inputEmail" class="col-sm-3 control-label">Nomor Telepon</label>
							<div class="col-sm-8" style="margin-top: 5px">
								+62 534-567-891
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Alamat</label>

							<div class="col-sm-8" style="margin-top: 5px">
								Jalan Joko Susilo No. 70
							</div>
						</div>
						<hr>
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