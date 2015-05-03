@extends('app')

@section('content')
	<ol class="breadcrumb">
		<li class="active">Phương Tiện</a></li>
	</ol>
	<ul>
	@foreach($nhoms as $nhom)
		<li>
			<a href="{{ route('nhom.show', $nhom->slug) }}">{{ $nhom->ten_nhom }}</a>
		</li>	
	@endforeach
	</ul>
@stop