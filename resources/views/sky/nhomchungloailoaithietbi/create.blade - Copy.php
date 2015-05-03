@extends('app')

@section('content')

	<ol class="breadcrumb">
		<li><a href="{{ route('nhom.index') }}">Phương Tiện</a></li>
		<li><a href="{{ route('nhom.show', $nhom->slug) }}">{{ $nhom->ten_nhom }}</a></li>
		<li><a href="{{ route('nhom.chungloai.show', [$nhom->slug, $chung_loai->slug]) }}">{{ $chung_loai->ten_chung_loai }}</a></li>
		<li><a href="{{ route('nhom.chungloai.loai.show', [$nhom->slug, $chung_loai->slug, $loai->slug]) }}">{{ $loai->ten_loai }}</a></li>
		<li class="active">Tạo Mới</li>
	</ol>

	@include('errors.list')

	{!! Form::open(['route' => ['nhom.chungloai.loai.thietbi.store', $nhom->slug, $chung_loai->slug, $loai->slug]]) !!}

		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-success">
				<div class="panel-heading">
					Thêm Phương Tiện
				</div>
				<div class="panel-body">	
					@include('sky.nhomchungloailoaithietbi._form', ['submit_button_text' => 'Thêm mới'])
				</div>
			</div>
		</div>
		
	{!! Form::close() !!}
	
	
@stop