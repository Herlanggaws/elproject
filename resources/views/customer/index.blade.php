@extends('layouts.content_layout')

@section('title')
Customer
@stop

@section('small_title')
Table
@stop

@section('subtitle')
Customer List
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
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>DOB</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($customers as $customer)
		<tr>
			<td>{{$customer->id}}</td>
			<td>{{$customer->first_name}}</td>
			<td>{{$customer->last_name}}</td>
			<td>{{$customer->email}}</td>
			<td>{{$customer->dob}}</td>
			<td>
				<div class="btn-group">
					<button type="button" class="btn btn-default btn-flat">Action</button>
					<button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{url ('customer', $customer->id)}}">Show</a></li>
						<li><a href="{{ URL::to('customer/' . $customer->id . '/edit') }}">Edit</a></li>

						<li>
							

							{!! Form::model($customer, ['method'=> 'DELETE', 'action' => ['CustomerController@destroy', $customer->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
							{!! Form::submit('Delete') !!}
							{!! Form::close() !!}
						</li>
						<li class="divider"></li>
						<li><a href="{{URL::to('customer/?chain_id='.$customer->id)}}">Product Category</a></li>
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
<a href="{{ URL::to('customer/create') }}" class="btn btn-default btn-flat">Create</a>
<?php echo $customers->render(); ?><br/>
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




