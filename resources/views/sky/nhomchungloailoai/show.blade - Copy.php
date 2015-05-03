@extends('app')

@section('content')
	
	<ol class="breadcrumb">
		<li><a href="{{ route('nhom.index') }}">Phương Tiện</a></li>
		<li><a href="{{ route('nhom.show', $nhom->slug) }}">{{ $nhom->ten_nhom }}</a></li>
		<li><a href="{{ route('nhom.chungloai.show', [$nhom->slug, $chung_loai->slug]) }}">{{ $chung_loai->ten_chung_loai }}</a></li>
		<li class="active">{{ $loai->ten_loai }}</li>
	</ol>

	{!! Form::open(['method' => 'GET']) !!}
		      {!! Form::input('search', 's', Request::get('s'), ['placeholder' => 'Bạn muốn tìm gì?', 'class' => 'form-control']) !!}
	{!! Form::close() !!}

	<hr/>
	{!! var_dump(URL::full()) !!}
	
	@if($thiet_bis->count())
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
							<th>Mã Thiết Bị</th>
							<th>Assoc.</th>
							<th>Hãng SX</th>
							<th class="text-center">ĐV Sở Hữu</th>
							<th class="text-center">ĐV Quản Lý</th>
							<th class="text-center">Khu Vực</th>
							<th class="text-center">Năm SD</th>
							<th class="text-center">Tag</th>
					</tr>
				</thead>
				<tbody>
					@foreach($thiet_bis as $thiet_bi )
						
						<tr>
							<td><a href="{{ route('nhom.chungloai.loai.thietbi.edit', [$nhom->slug, $chung_loai->slug, $loai->slug, $thiet_bi->id ]) }}">{{ $thiet_bi->ma_thiet_bi }}</a></td>
							<td><a href="{{ route('nhom.chungloai.loai.thietbi.edit', [$nhom->slug, $chung_loai->slug, $loai->slug, $thiet_bi->id ]) }}">{{ $thiet_bi->associated_with }}</a></td>
							<td><a href="#">{{ $thiet_bi->hangSanXuat->ten_hang_san_xuat }}</a></td>
							<td class="text-center"><a href="#">{{ $thiet_bi->dvSoHuu->ma_dv_so_huu }}</a></td>
							<td class="text-center"><a href="#">{{ $thiet_bi->dvQuanLy->ma_dv_quan_ly }}</a></td>
							<td class="text-center"><a href="{{ URL::full().($query == 0 ? '?' : '&').'f=kv'.'&c='.$thiet_bi->khu_vuc_id }}">{{ $thiet_bi->khuVuc->ma_khu_vuc }}</a></td>
							<td class="text-center"><a href="#">{{ $thiet_bi->nam_su_dung }}</a></td>
							<td class="text-center"><a href="#">{{ $thiet_bi->tag_1 ? $thiet_bi->tag_1 : '-' }}</a></td>
						</tr>
						
					@endforeach
				</tbody>
			</table>

			<?php echo $thiet_bis->appends(Request::except('page'))->render(); ?>
		@else
			<p>Không có kết quả trả về</p>
		@endif
@stop