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
			<th>Chain</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($productCategories as $productCategory)
		<tr>
			<td>{{$productCategory->id}}</td>
			<td>{{$productCategory->name}}</td>
			<td>{{$productCategory->chain->name}}</td>
			<td>
				<div class="btn-group">
					<button type="button" class="btn btn-default btn-flat">Action</button>
					<button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{url ('productCategory', $productCategory->id)}}">Show</a></li>
						<li><a href="{{ URL::to('productCategory/' . $productCategory->id . '/edit') }}">Edit</a></li>

						<li>
							{!! Form::model($productCategory, ['method'=> 'DELETE', 'action' => ['ProductCategoryController@destroy', $productCategory->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
							{!! Form::submit('Delete') !!}
							{!! Form::close() !!}
						</li>
						<li class="divider"></li>
						<li><a href="{{URL::to('productCategory')}}">Product List</a></li>
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
<a href="{{ URL::to('productCategory/create') }}" class="btn btn-default btn-flat">Create</a>
<?php echo $productCategories->render(); ?><br/>
@stop

@section('custom_javascript')

@stop




