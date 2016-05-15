@extends('layouts.dashboard_layout')
@section('content')


@include('includes.default_content')


@stop

@section('custom_javascript')
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ URL::asset('assets/plugins/morris/morris.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('assets/dist/js/pages/dashboard.js') }}"></script>
@stop