@extends('layouts.content_layout')

@section('title')
Chain
@stop

@section('small_title')
Detail
@stop

@section('subtitle')
Chain Detail
@stop

@section('content')
<div class="form-horizontal">
	<div class="form-group">
		<label class="col-sm-2">Name</label>
		<div class="col-sm-10">
			{{$chain->name}}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2">About</label>
		<div class="col-sm-10">
			{{$chain->about}}
		</div>
	</div>
</div>
<a href="{{ URL::to('chain/create') }}" class="btn btn-default btn-flat">Create</a>
@stop

@section('custom_javascript')

@stop




