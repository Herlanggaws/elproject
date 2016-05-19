@extends('layouts.content_layout')

@section('title')
Chain
@stop

@section('small_title')
Create
@stop

@section('subtitle')
Create New Product Category
@stop

@section('content')
{!! Form::open(['url'=>'productCategory', 'role'=>"form"]) !!}
@include('product_category.form', ['buttonName'=>'Create'])
{!! Form::close() !!}

@include('errors.list')
@stop

@section('custom_javascript')

@stop