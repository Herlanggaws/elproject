@extends('layouts.content_layout')

@section('title')
Owner
@stop

@section('small_title')
Detail
@stop

@section('subtitle')
{{$owner->first_name}}
@stop

@section('content')
<div class="form-horizontal">
	
	<div class="form-group">
		<label class="col-sm-2">First Name</label>
		<div class="col-sm-10">
			{{$owner->first_name}}
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2">Last Name</label>
		<div class="col-sm-10">
			{{$owner->last_name}}
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2">Email</label>
		<div class="col-sm-10">
			{{$owner->email}}
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2">Address</label>
		<div class="col-sm-10">
			{{$owner->address}}
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2">Zipcode</label>
		<div class="col-sm-10">
			{{$owner->zip_code}}
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2">Phone Number</label>
		<div class="col-sm-10">
			{{$owner->phone_number}}
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2">DOB</label>
		<div class="col-sm-10">
			{{$owner->dob}}
		</div>
	</div>
</div>
<a href="{{ URL::to('admin/owner/' . $owner->id . '/edit') }}" class="btn btn-default btn-flat">Edit</a>




{!! Form::model($owner, ['method'=> 'DELETE', 'action' => ['OwnerController@destroy', $owner->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
{!! Form::submit('Delete', ['class'=>'btn btn-default btn-flat']) !!}
{!! Form::close() !!}
@stop

@section('custom_javascript')

@stop




