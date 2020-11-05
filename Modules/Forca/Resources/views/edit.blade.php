@extends('adminlte::page')
@section('title', 'Força')

@section('content')
    {!! Form::model($reg,[ 'route'=>['forca.update', $reg->forca_id], 'method'=>'PUT', 'id'=>'form_', 'enctype'=>'multipart/form-data', 'file'=>true]) !!}
    @include ('forca::_form')
    {!! Form::close() !!}
@stop
