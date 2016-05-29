<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class'=> 'form-control', 'placeholder'=>'Name']) !!}
</div>

<div class="form-group">
	{!! Form::label('chain', 'Chain Id') !!}
	{!! Form::text('chain_id', null, ['class'=> 'form-control', 'placeholder'=>'Chain Id']) !!}
</div>




{!! Form::submit($buttonName,['class'=>'btn btn-default btn-flat']) !!}