@extends('layouts.master')

@section('title')
Ruangan
@endsection

@section('ruangan_active')
style="background-color: #576574"
@endsection

@section('main_menu')
<a href="{{action('RuanganController@viewRuangan')}}">Ruangan</a>
@endsection

{{-- @section('sub_menu')
	<i class="fas fa-angle-right" style="font-size: 20px; padding: 0px 10px 0px 10px"></i> Pinjam
	@endsection --}}

	@section('content')

	@if($errors->any('Success'))
	<div class="alert alert-success alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-check"></i> Success!</h4>
		{{ $errors->first('Success')}} Silahkan menuju menu <a style="font-weight: bold" href="/peminjaman">Peminjaman</a> untuk perkembangan permohonan pinjam ruang Anda.
	</div>
	@endif

	<link rel="stylesheet" type="text/css" href="{{url('css/ruangan.css')}}">
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.faq_question').click(function() {
				if($(this).parent().is('.open')){
					$(this).closest('.faq').find('.faq_answer_container').animate({'height':'0'},500, function(){
						$(this).closest('.faq').removeClass('open');
					});
				}else{
					var newHeight = $(this).closest('.faq').find('.faq_answer').outerHeight(true)+'px';
					$(this).closest('.faq').find('.faq_answer_container').animate({'height':newHeight},500);
					$(this).closest('.faq').addClass('open');
				}
			});

		});
	</script>
	

	<div class="faq" style="background-color: white">
		<div class="faq_question">
			<div>
				<a href="{{action('RuanganController@viewPinjam')}}" class="btn btn-primary">Pinjam</a>
				<p style="display: inline-block; padding-left: 10px; font-size: 30px; vertical-align: middle; margin-bottom: 0px">IF-105</p>
				<p style="display: inline-block; padding-left: 30px; font-size: 25px; vertical-align: middle; margin-bottom: 0px">|</p>
				<p style="display: inline-block; padding-left: 30px; font-size: 20px; vertical-align: middle; margin-bottom: 0px">Peminjaman<i id="click_list" style="padding: 0px 0px 0px 10px" class="fas fa-angle-right"></i></p>
			</div>
		</div>
		<div class="faq_answer_container">
			<div class="faq_answer">
				<div>
					<p style="display: inline-block; padding: 10px 10px 10px 10px; font-size: 15px; font-weight: bold; color: white; vertical-align: middle; margin-bottom: 0px; background-color: grey">20 Mei 2018</p>
					<p style="display: inline-block; padding: 10px 10px 10px 10px; font-size: 15px; vertical-align: middle; margin: 0px; background-color: white">BEMF Basic Media Schooling</p>
				</div>
				<div style="margin-top: 10px">
					<p style="display: inline-block; padding: 10px 10px 10px 10px; font-size: 15px; font-weight: bold; color: white; vertical-align: middle; margin-bottom: 0px; background-color: grey">20 Mei 2018</p>
					<p style="display: inline-block; padding: 10px 10px 10px 10px; font-size: 15px; vertical-align: middle; margin: 0px; background-color: white">BEMF Basic Media Schooling</p>
				</div>
			</div>
		</div>
	</div>

	<div class="faq" style="background-color: white">
		<div class="faq_question">
			<div>
				<a href="{{action('RuanganController@viewPinjam')}}" class="btn btn-primary">Pinjam</a>
				<p style="display: inline-block; padding-left: 10px; font-size: 30px; vertical-align: middle; margin-bottom: 0px">IF-108</p>
				<p style="display: inline-block; padding-left: 30px; font-size: 25px; vertical-align: middle; margin-bottom: 0px">|</p>
				<p class=".lebih" style="display: inline-block; padding-left: 30px; font-size: 20px; vertical-align: middle; margin-bottom: 0px">Peminjaman<i id="click_list" style="padding: 0px 0px 0px 10px" class="fas fa-angle-right"></i></p>
			</div>
		</div>
		<div class="faq_answer_container">
			<div class="faq_answer">
				<div>
					<p style="display: inline-block; padding: 10px 10px 10px 10px; font-size: 15px; font-weight: bold; color: white; vertical-align: middle; margin-bottom: 0px; background-color: grey">20 Mei 2018</p>
					<p style="display: inline-block; padding: 10px 10px 10px 10px; font-size: 15px; vertical-align: middle; margin: 0px; background-color: white">BEMF Basic Media Schooling</p>
				</div>
				<div style="margin-top: 10px">
					<p style="display: inline-block; padding: 10px 10px 10px 10px; font-size: 15px; font-weight: bold; color: white; vertical-align: middle; margin-bottom: 0px; background-color: grey">20 Mei 2018</p>
					<p style="display: inline-block; padding: 10px 10px 10px 10px; font-size: 15px; vertical-align: middle; margin: 0px; background-color: white">BEMF Basic Media Schooling</p>
				</div>
			</div>
		</div>
	</div>

	<div class="faq" style="background-color: white">
		<div class="faq_question">
			<div>
				<a href="{{action('RuanganController@viewPinjam')}}" class="btn btn-primary">Pinjam</a>
				<p style="display: inline-block; padding-left: 10px; font-size: 30px; vertical-align: middle; margin-bottom: 0px">Aula</p>
				<p style="display: inline-block; padding-left: 30px; font-size: 25px; vertical-align: middle; margin-bottom: 0px">|</p>
				<p class=".lebih" style="display: inline-block; padding-left: 30px; font-size: 20px; vertical-align: middle; margin-bottom: 0px">Peminjaman<i id="click_list" style="padding: 0px 0px 0px 10px" class="fas fa-angle-right"></i></p>
			</div>
		</div>
		<div class="faq_answer_container">
			<div class="faq_answer">
				<div>
					<p style="display: inline-block; padding: 10px 10px 10px 10px; font-size: 15px; font-weight: bold; color: white; vertical-align: middle; margin-bottom: 0px; background-color: grey">20 Mei 2018</p>
					<p style="display: inline-block; padding: 10px 10px 10px 10px; font-size: 15px; vertical-align: middle; margin: 0px; background-color: white">BEMF Basic Media Schooling</p>
				</div>
				<div style="margin-top: 10px">
					<p style="display: inline-block; padding: 10px 10px 10px 10px; font-size: 15px; font-weight: bold; color: white; vertical-align: middle; margin-bottom: 0px; background-color: grey">20 Mei 2018</p>
					<p style="display: inline-block; padding: 10px 10px 10px 10px; font-size: 15px; vertical-align: middle; margin: 0px; background-color: white">BEMF Basic Media Schooling</p>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(".faq").click(function() {
			// $("#ccc").toggle().animate();
			$("#click_list").animate().toggleClass('fa-angle-right fa-angle-down');
		});
	</script>
	@endsection