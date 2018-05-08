@extends('layouts.master')

@section('title')
Alur
@endsection

@section('main_menu')
<a href="{{action('ProfileController@viewProfile')}}">Profile</a>
@endsection

@section('content')
<div class="row">
	<div class="col-md-3">
		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile">
				<img class="profile-user-img img-responsive img-circle" style="width: 600px" src="{{url('adminlte/dist/img/user4-128x128.jpg')}}" alt="User profile picture">

				<h3 class="profile-username text-center">Nina Mcintire</h3>

				<p class="text-muted text-center">Software Engineer</p>
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
					<h3 style="margin: 10px 0 20px 25px">Account Setting</h3>
					<form class="form-horizontal">
						<div class="form-group">
							<label for="inputEmail" class="col-sm-3 control-label">Email</label>

							<div class="col-sm-8">
								<input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Password</label>

							<div class="col-sm-8">
								<input type="password" class="form-control" id="inputEmail" placeholder="Password" required>
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Confirm Password</label>

							<div class="col-sm-8">
								<input type="password" class="form-control" id="inputEmail" placeholder="Confirm Password" required>
							</div>	
						</div>
					</form>
				</div>
				<!-- /.tab-pane -->
			</div>
			<hr style="margin: 0px">
			<!-- /.tab-content -->
			<div class="tab-content">
				<div class="active tab-pane" id="settings">
					<h3 style="margin: 10px 0 20px 35px">Profile Setting</h3>
					<form class="form-horizontal">
						<div class="form-group">
							<label for="inputEmail" class="col-sm-3 control-label">First Name</label>

							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputEmail" placeholder="first name" required>
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Last Name</label>

							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputEmail" placeholder="last name" required>
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Birth Day</label>

							<div class="col-sm-8">
								<input type="date" class="form-control" id="inputEmail" placeholder="birh day" required>
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Gender</label>
							<div class="col-sm-8" style="padding-top: 5px">
								<input type="radio" name="optionsRadios" id="optionsRadios1" value="male" checked>
								Male
								<input style="margin-left: 20px" type="radio" name="optionsRadios" id="optionsRadios1" value="female" checked>
								Female
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">About</label>
							<div class="col-sm-8">
								<textarea type="text" class="form-control" id="inputEmail" placeholder="about" required></textarea>
							</div>
						</div>
					</form>
				</div>
				<!-- /.tab-pane -->
			</div>
			<!-- /.tab-content -->
			<hr style="margin: 0px">
			<!-- /.tab-content -->
			<div class="tab-content">
				<div class="active tab-pane" id="settings">
					<h3 style="margin: 10px 0 20px 35px">Contact Setting</h3>
					<form class="form-horizontal">
						<div class="form-group">
							<label for="inputEmail" class="col-sm-3 control-label">Phone Number</label>

							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputEmail" placeholder="phone" required>
							</div>
						</div>
						<div class="form-group" style="margin-top: 30px">
							<label for="inputEmail" class="col-sm-3 control-label">Adress</label>

							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputEmail" placeholder="adress" required>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-8" style="margin-top: 10px; margin-left: 205px">
								<button style="width: 515px" type="submit" class="btn btn-success">Update</button>
							</div>
						</div>
					</form>
				</div>
				<!-- /.tab-pane -->
			</div>
			<!-- /.tab-content -->
		</div>
		<!-- /.nav-tabs-custom -->
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->
@endsection