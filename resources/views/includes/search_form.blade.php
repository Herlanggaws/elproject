{!! Form::open(['method'=>'GET','url'=>$url,null,'role'=>'search'])  !!}

<div class="col-md-4">
	<div class="form-group">
		{!! Form::text('search', null, ['class'=> 'form-control', 'placeholder'=>'Search']) !!}
	</div>
	<div class="form-group">
		{!!  Form::select('category', $category,null, array('class'=>'form-control select2', 'id'=>'selector1'))!!}
	</div>
	<div class="form-group">
		{!! Form::submit('Search',['class'=>'btn btn-default btn-flat']) !!}
	</div>
</div>

{!! Form::close() !!}

