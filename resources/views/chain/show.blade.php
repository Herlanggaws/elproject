@extends('layouts.content_layout')

@section('title')
Chain
@stop

@section('small_title')
Detail
@stop

@section('subtitle')
{{$chain->name}}
@stop

@section('content')
<div class="form-horizontal">
	
	<div class="form-group">
		<label class="col-sm-2">About</label>
		<div class="col-sm-10">
			{{$chain->about}}
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2">Website</label>
		<div class="col-sm-10">
			{{$chain->website}}
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2">Product Category</label>
		<div class="col-sm-10">
			{{$chain->productCategories->count()}}
		</div>
	</div>

</div>
<a href="{{ URL::to('chain/' . $chain->id . '/edit') }}" class="btn btn-default btn-flat">Edit</a>
@stop

@section('custom_javascript')

@stop




