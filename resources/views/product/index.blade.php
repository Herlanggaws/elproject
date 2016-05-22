@extends('layouts.content_layout')

@section('title')
Product Category
@stop

@section('small_title')
Table
@stop

@section('subtitle')
Product Category List
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
			<th>Price</th>
			<th>Product Category</th>
			<th>Available</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($products as $product)
		<tr>
			<td>{{$product->id}}</td>
			<td>{{$product->name}}</td>
			<td>{{$product->price}}</td>
			<td>{{$product->productCategory->name}}</td>
			<td>{{$product->available}}</td>
			<td>
				<div class="btn-group">
					<button type="button" class="btn btn-default btn-flat">Action</button>
					<button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{url ('product', $product->id)}}">Show</a></li>
						<li><a href="{{ URL::to('product/' . $product->id . '/edit') }}">Edit</a></li>

						<li>
							{!! Form::model($product, ['method'=> 'DELETE', 'action' => ['ProductController@destroy', $product->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
							{!! Form::submit('Delete') !!}
							{!! Form::close() !!}
						</li>
					</ul>
				</div>
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
<a href="{{ URL::to('product/create') }}" class="btn btn-default btn-flat">Create</a>
<?php echo $products->render(); ?><br/>
@stop

@section('custom_javascript')

@stop




