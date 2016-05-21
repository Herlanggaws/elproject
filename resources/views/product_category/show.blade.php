@extends('layouts.content_layout')

@section('title')
Product Category
@stop

@section('small_title')
Detail
@stop

@section('subtitle')
{{$productCategory->name}}
@stop

@section('content')
<div class="form-horizontal">
	
	<div class="form-group">
		<label class="col-sm-2">List of Product</label>
		
	</div>
</div>
<a href="{{ URL::to('productCategory/' . $productCategory->id . '/edit') }}" class="btn btn-default btn-flat">Edit</a>
@stop

@section('custom_javascript')

@stop




