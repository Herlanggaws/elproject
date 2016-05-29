<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class'=> 'form-control', 'placeholder'=>'Name']) !!}
</div>

<div class="form-group">
	{!! Form::label('price', 'Price') !!}
	{{ Form::number('price', null, ['class' => 'form-control', 'placeholder'=>'Price']) }}
</div>

<div class="form-group">
	{!! Form::label('product_category_id', 'Product Cateogry ID') !!}
	{!! Form::text('product_category_id', null, ['class'=> 'form-control', 'placeholder'=>'Product Cateogry ID']) !!}
</div>

{!! Form::submit($buttonName,['class'=>'btn btn-default btn-flat']) !!}