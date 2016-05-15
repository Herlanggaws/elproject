<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class'=> 'form-control', 'placeholder'=>'Name']) !!}
</div>

<div class="form-group">
	{!! Form::label('about', 'About') !!}
	{{ Form::textarea('about', null, ['class' => 'textarea', 'placeholder'=>'About', 'style'=>'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) }}
</div>

{!! Form::submit($buttonName,['class'=>'btn btn-default btn-flat']) !!}