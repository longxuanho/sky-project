@extends('app')

@section('content')
	<ol class="breadcrumb">
		<li><a href="{{ route('nhom.index') }}">Phương Tiện</a></li>
		<li class="active">{{ $nhom->ten_nhom }}</li>
	</ol>
	<ul>
		@foreach($nhom->chungLoais as $chung_loai )
			<li>
				<a href="{{ route('nhom.chungloai.show', [$nhom->slug, $chung_loai->slug]) }}">{{ $chung_loai->ten_chung_loai }}</a>
			</li>	
		@endforeach
	</ul>
@stop