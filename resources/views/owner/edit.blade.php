@extends('layouts.content_layout')

@section('title')
Owner
@stop

@section('small_title')
Edit
@stop

@section('subtitle')
Edit {{$owner->first_name}}
@stop

@section('content')
{!! Form::model($owner , ['method'=> 'PATCH', 'action' => ['OwnerController@update', $owner->id]]) !!}
@include('owner.form', ['buttonName'=>'Edit'])
{!! Form::close() !!}

@include('errors.list')
@stop

@section('custom_javascript')

@stop