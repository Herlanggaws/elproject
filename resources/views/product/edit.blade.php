@extends('layouts.content_layout')

@section('title')
Product
@stop

@section('small_title')
Edit
@stop

@section('subtitle')
Edit {{$product->name}}
@stop

@section('content')
{!! Form::model($product , ['method'=> 'PATCH', 'action' => ['ProductController@update', $product->id]]) !!}
@include('product.form', ['buttonName'=>'Edit'])
{!! Form::close() !!}

@include('errors.list')
@stop

@section('custom_javascript')

@stop