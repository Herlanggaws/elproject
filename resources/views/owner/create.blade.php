@extends('layouts.content_layout')

@section('title')
Owner
@stop

@section('small_title')
Create
@stop

@section('subtitle')
Create New Owner
@stop

@section('content')
{!! Form::open(['url'=>'admin/owner', 'role'=>"form"]) !!}
@include('owner.form', ['buttonName'=>'Create'])
{!! Form::close() !!}
<br/>
@include('errors.list')
@stop

@section('custom_javascript')

@stop