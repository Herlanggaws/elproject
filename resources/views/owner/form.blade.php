<div class="form-group">
	{!! Form::label('first_name', 'First Name') !!}
	{!! Form::text('first_name', null, ['class'=> 'form-control', 'placeholder'=>'First Name']) !!}
</div>

<div class="form-group">
	{!! Form::label('last_name', 'Last Name') !!}
	{!! Form::text('last_name', null, ['class'=> 'form-control', 'placeholder'=>'Last Name']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::text('email', null, ['class'=> 'form-control', 'placeholder'=>'Email']) !!}
</div>

<div class="form-group">
	{!! Form::label('address', 'Address') !!}
	{!! Form::text('address', null, ['class'=> 'form-control', 'placeholder'=>'Address']) !!}
</div>

<div class="form-group">
	{!! Form::label('phone_number', 'Phone Number') !!}
	{!! Form::text('phone_number', null, ['class'=> 'form-control', 'placeholder'=>'Phone Number']) !!}
</div>

<div class="form-group">
	{!! Form::label('zip_code', 'Zip Code') !!}
	{!! Form::text('zip_code', null, ['class'=> 'form-control', 'placeholder'=>'Zip Code']) !!}
</div>


<div class="form-group">
	{!! Form::label('dob', 'DOB') !!}
	<div class="input-group date">
		<div class="input-group-addon">
			<i class="fa fa-calendar"></i>
		</div>
		{!! Form::text('dob', null, ['class'=> 'form-control pull-right', 'placeholder'=>'DOB', 'id'=>'datepicker']) !!}
	</div>
	
</div>


{!! Form::submit($buttonName,['class'=>'btn btn-default btn-flat']) !!}



@section('custom_javascript')
<script type="text/javascript">

//Date picker
$('#datepicker').datepicker({
	autoclose: true,
	dateFormat: "yy-mm-dd",
});


</script>
@stop