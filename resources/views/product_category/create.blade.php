@extends('layouts.content_layout')

@section('title')
Product Category
@stop

@section('small_title')
Create
@stop

@section('subtitle')
Create New Product Category
@stop

@section('content')
{!! Form::open(['url'=>'admin/product_category', 'role'=>"form"]) !!}
@include('product_category.form', ['buttonName'=>'Create'])
{!! Form::close() !!}
<br/>
@include('errors.list')
@stop

@section('custom_javascript')

@stop