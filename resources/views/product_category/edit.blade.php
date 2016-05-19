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
{!! Form::model($productCateory , ['method'=> 'PATCH', 'action' => ['ProductCategoryController@update', $productCateory->id]]) !!}
@include('product_category.form', ['buttonName'=>'Edit'])
{!! Form::close() !!}

@include('errors.list')
@stop

@section('custom_javascript')

@stop