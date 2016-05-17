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
{!! Form::model($chain, ['method'=> 'PATCH', 'action' => ['ChainController@update', $chain->id]]) !!}
@include('chain.form', ['buttonName'=>'Edit'])
{!! Form::close() !!}

@include('errors.list')
@stop

@section('custom_javascript')

@stop