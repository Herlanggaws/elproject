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
@include('includes.search_form',['url'=>'admin/chain','link'=>'admin/chain']) 
<table id="example2" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Website</th>
			<th>About</th>
			<th>Owner Id</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($chains as $chain)
		<tr>
			<td>{{$chain->id}}</td>
			<td>{{$chain->name}}</td>
			<td>{{$chain->website}}</td>
			<td>{{str_limit($chain->about,100)}}</td>
			<td>{{$chain->owner->id}}</td>
			<td>
				<div class="btn-group">
					<button type="button" class="btn btn-default btn-flat">Action</button>
					<button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{url ('admin/chain', $chain->id)}}">Show</a></li>
						<li><a href="{{ URL::to('admin/chain/' . $chain->id . '/edit') }}">Edit</a></li>

						<li>
							

							{!! Form::model($chain, ['method'=> 'DELETE', 'action' => ['ChainController@destroy', $chain->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
							{!! Form::submit('Delete') !!}
							{!! Form::close() !!}
						</li>
						<li class="divider"></li>
						<!-- <li><a href="{{URL::to('productCategory/?chain_id='.$chain->id)}}">Product Category</a></li> -->
						
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
<?php echo $chains->render(); ?><br/>
<br/>
<a href="{{ URL::to('admin/chain/create') }}" class="btn btn-default btn-flat">Create</a>

@stop

@section('custom_javascript')
<script type="text/javascript">
function ConfirmDelete()
{
	var x = confirm("Are you sure?");
	if (x)
		return true;
	else
		return false;
}
</script>
@stop




