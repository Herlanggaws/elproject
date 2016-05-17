@extends('layouts.content_layout')

@section('title')
Chain
@stop

@section('small_title')
Table
@stop

@section('subtitle')
Chain List
@stop

@section('content')
@if (session('message'))
<div class="alert alert-success">
	{{ session('message') }}
</div>
@endif

<table id="example2" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($productCategories as $productCategory)
		<tr>
			<td>{{$productCategory->id}}</td>
			<td>{{$productCategory->name}}</td>
			<td>
				
			</td>
		</tr>
		@endforeach
	</tbody>
	<tfoot>
		<tr>

		</tr>
	</tfoot>
</table>
<br/>
<a href="{{ URL::to('product_category/create') }}" class="btn btn-default btn-flat">Create</a>
<?php echo $productCategories->render(); ?><br/>
@stop

@section('custom_javascript')

@stop




