@extends('layouts.content_layout')

@section('title')
{{$productCategory->name}}
@stop

@section('small_title')
Detail
@stop

@section('subtitle')
Product List
@stop

@section('content')
<table id="example2" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($products as $product)
		<tr>
			<td>{{$product->id}}</td>
			<td>{{$product->name}}</td>
			<td>{{$product->price}}</td>
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
<a href="{{ URL::to('productCategory/' . $productCategory->id . '/edit') }}" class="btn btn-default btn-flat">Edit</a>
<?php echo $products->render(); ?><br/>
@stop

@section('custom_javascript')

@stop




