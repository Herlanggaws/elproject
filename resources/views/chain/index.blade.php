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
			<th>About</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($chains as $chain)
		<tr>
			<td>{{$chain->id}}</td>
			<td>{{$chain->name}}</td>
			<td>{{str_limit($chain->about,100)}}</td>
			<td>
				<div class="btn-group">
                  <button type="button" class="btn btn-default btn-flat">Action</button>
                  <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url ('chain', $chain->id)}}">Show</a></li>
                    <li><a href="{{ URL::to('chain/' . $chain->id . '/edit') }}">Edit</a></li>
                    <li><a href="#">Delete</a></li>
                    <li class="divider"></li>
                    <li><a href="{{URL::to('productCategory')}}">Product Category</a></li>
                    <li><a href="#">Contact List</a></li>
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
<a href="{{ URL::to('chain/create') }}" class="btn btn-default btn-flat">Create</a>
<?php echo $chains->render(); ?><br/>
@stop

@section('custom_javascript')

@stop



