<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class'=> 'form-control', 'placeholder'=>'Name']) !!}
</div>

<div class="form-group">
	{!! Form::label('chain', 'Chain') !!}
	{!!  Form::select('chain_id', $chainList,null, array('class'=>'form-control select2', 'placeholder'=>'Select'))!!}
	
</div>


{!! Form::submit($buttonName,['class'=>'btn btn-default btn-flat']) !!}