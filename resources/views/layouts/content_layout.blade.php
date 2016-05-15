@extends('layouts.dashboard_layout')
@section('content_layout')
<section class="content-header">
	<h1>
		@yield('title')
		<small>@yield('small_title')</small>
	</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">@yield('subtitle')</h3>
				</div>

				<div class="box-body">
					<div class="box-body">
						@yield('content')
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
@stop




