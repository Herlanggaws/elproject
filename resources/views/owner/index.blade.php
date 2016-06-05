@extends('layouts.content_layout')

@section('title')
Owner
@stop

@section('small_title')
Table
@stop

@section('subtitle')
Owner List
@stop

@section('content')
@if (session('message'))
<div class="alert alert-success">
	{{ session('message') }}
</div>
@endif

@include('includes.search_form',['url'=>'admin/owner','link'=>'admin/owner']) 

<table id="example2" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>DOB</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($owners as $owner)
		<tr>
			<td>{{$owner->id}}</td>
			<td>{{$owner->first_name}}</td>
			<td>{{$owner->last_name}}</td>
			<td>{{$owner->email}}</td>
			<td>{{$owner->dob}}</td>
			<td>
				<div class="btn-group">
					<button type="button" class="btn btn-default btn-flat">Action</button>
					<button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{url ('admin/owner', $owner->id)}}">Show</a></li>
						<li><a href="{{ URL::to('admin/owner/' . $owner->id . '/edit') }}">Edit</a></li>

						<li>
							

							{!! Form::model($owner, ['method'=> 'DELETE', 'action' => ['OwnerController@destroy', $owner->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
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
<a href="{{ URL::to('admin/owner/create') }}" class="btn btn-default btn-flat">Create</a>
<?php echo $owners->render(); ?><br/>
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




