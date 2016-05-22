<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class'=> 'form-control', 'placeholder'=>'Name']) !!}
</div>

<div class="form-group">
	{!! Form::label('price', 'Price') !!}
	{{ Form::number('price', null, ['class' => 'form-control', 'placeholder'=>'Price']) }}
</div>

<div class="form-group">
	{!! Form::label('product_category', 'Category') !!}
	{!!  Form::select('product_category_id', $categoryList,null, array('class'=>'form-control select2', 'placeholder'=>'Select'))!!}
	
</div>

{!! Form::submit($buttonName,['class'=>'btn btn-default btn-flat']) !!}