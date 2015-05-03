@extends('app')

@section('content')
	<h1>Gửi lên một báo cáo</h1>

	{!! Form::open(['route' => 'report.store', 'files' => true]) !!}
		<div class="form-group">
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}	
		</div>
		<div class="form-group">
			{!! Form::label('desc', 'Desc:') !!}
			{!! Form::text('desc', null, ['class' => 'form-control']) !!}	
		</div>
		<div class="form-group">
			{!! Form::label('tag', 'Tag:') !!}
			{!! Form::text('tag', null, ['class' => 'form-control']) !!}	
		</div>
		<div class="form-group">
			{!! Form::label('category_id', 'Phan Loai:') !!}
			{!! Form::text('category_id', null, ['class' => 'form-control']) !!}	
		</div>
		<div class="form-group">
			{!! Form::label('timeline_id', 'TimeStamp:') !!}
			{!! Form::text('timeline_id', null, ['class' => 'form-control']) !!}	
		</div>
		<div class="form-group">
			{!! Form::label('path', 'Upload Report:') !!}
			{!! Form::file('path') !!}	
		</div>
		<div class="form-group">
			{!! Form::submit('Tao Moi', ['class' => 'btn btn-primary form-control']) !!}
		</div>
	{!! Form::close() !!}
	
@stop

