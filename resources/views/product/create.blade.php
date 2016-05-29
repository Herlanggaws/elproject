@extends('layouts.content_layout')

@section('title')
Product
@stop

@section('small_title')
Create
@stop

@section('subtitle')
Create New Product
@stop

@section('content')
{!! Form::open(['url'=>'admin/product', 'role'=>"form"]) !!}
@include('product.form', ['buttonName'=>'Create'])
{!! Form::close() !!}

@include('errors.list')
@stop

@section('custom_javascript')

@stop