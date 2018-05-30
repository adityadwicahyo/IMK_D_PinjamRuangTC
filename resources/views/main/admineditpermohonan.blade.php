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
<div class="row">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Edit Peminjaman</h3>
		</div>
        <form id="pinjam-form" action="{{url('/admin/edit/permohonan')}}" method="post">
			{{ csrf_field() }}
			<div class="box-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Nama Kegiatan</label>
					<input type="email" class="form-control" id="exampleInputEmail1" value="Pelatihan Laravel HMTC" readonly="">
                </div>
            </div>
            <div class="box-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Ruangan</label>
					<select class="form-control"> 
						<option selected="">IF-105</option>
						<option>IF-108</option>
						<option>Aula</option>
					</select>
                </div>
            </div>
            <div class="box-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Jam Mulai</label>
					<input type="time" class="form-control" id="exampleInputEmail1" value="10:00">
                </div>
            </div>
            <div class="box-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Jam Akhir</label>
					<input type="time" class="form-control" id="exampleInputEmail1" value="11:00">
                </div>
            </div>
            <div class="box-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
</div>
<div class="container">
	<div class="card-body">
		
dafda
		</form>
	</div>
</div>
@endsection