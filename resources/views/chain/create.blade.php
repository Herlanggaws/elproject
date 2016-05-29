@extends('layouts.content_layout')

@section('title')
Chain
@stop

@section('small_title')
Create
@stop

@section('subtitle')
Create New Chain
@stop

@section('content')
{!! Form::open(['url'=>'admin/chain', 'role'=>"form"]) !!}
@include('chain.form', ['buttonName'=>'Create'])
{!! Form::close() !!}

@include('errors.list')
@stop

@section('custom_javascript')

@stop