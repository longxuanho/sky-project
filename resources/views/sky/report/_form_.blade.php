
<hr/>
{!! Form::hidden('id', null, [   'id' => 'id',
                                'class' => 'form-control', 
                                ]   ) !!}

<div class="form-group">
    <label class="col-sm-2 control-label" for="title">
		Thông tin chung:
	</label>
	<div class="col-sm-5">
		<span class="input-icon">
			{!! Form::text('title', null, [   'id' => 'title',
                                                    'class' => 'form-control tooltips', 
                                                    'placeholder' =>'Tiêu đề',
                                                    'data-placement' => 'top',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Tiêu đề báo cáo'
                                                ]   ) !!}
			<i class="fa  fa-reorder"></i>
        </span>
	</div>
	<div class="col-sm-4">
		<span class="input-icon">
			{!! Form::text('tag', null, [   'id' => 'tag',
                                                        'class' => 'form-control tooltips', 
                                                        'placeholder' =>'Tag',
                                                        'data-placement' => 'top',
                                                        'data-rel' => 'tooltip',
                                                        'data-original-title' => 'Tag tìm kiếm nhanh'
                                                    ]   ) !!}
			<i class="fa fa-tag"></i>
        </span>
	</div>
</div>
<div class="form-group">
    <div class="col-sm-5 col-sm-offset-2">
        <span class="input-icon">
			{!! Form::text('desc', null, [   'id' => 'desc',
                                                        'class' => 'form-control tooltips', 
                                                        'placeholder' =>'Mô tả',
                                                        'data-placement' => 'top',
                                                        'data-rel' => 'tooltip',
                                                        'data-original-title' => 'Mô tả'
                                                    ]   ) !!}
			<i class="fa fa-quote-left"></i>
        </span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label" for="category_id">
		Phân loại & Nhãn thời gian:
	</label>
    <div class="col-sm-5">
        <span class="input-icon">
            {!! Form::select('category_id' , $category_list, null, [ 'id' => 'category_id',
                                                    'class' => 'form-control tooltips search-select select-text-ident',
                                                    'placeholder' => 'Nhóm',
                                                    'data-placement' => 'bottom',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Nhóm Báo Cáo'
                                                    ]) !!}
           <i class="clip clip-grid-5"></i>
        </span>
    </div>
    <div class="col-sm-4">
        <span class="input-icon">
            {!! Form::select('timeline_id' , $timeline_list, null, [ 'id' => 'timeline_id',
                                                    'class' => 'form-control tooltips search-select select-text-ident',
                                                    'placeholder' => 'Nhãn Thời Gian',
                                                    'data-placement' => 'bottom',
                                                    'data-rel' => 'tooltip',
                                                    'data-original-title' => 'Nhãn Thời Gian'
                                                    ]) !!}
            <i class="fa fa-calendar"></i>
        </span>
    </div>
</div>

<hr/>
<div class="form-group">
     <label class="col-sm-2 control-label" for="path">
		Chọn file:
	</label>
    <div class="col-sm-5">
        {!! Form::file('path') !!}
    </div>
</div>
<hr/>