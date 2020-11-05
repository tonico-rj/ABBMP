@extends('adminlte::page')
@section('title', 'Especialidades')

@section('content')
    {!! Form::model($reg,[ 'route'=>['especialidade.update', $reg->especialidade_id], 'method'=>'PUT', 'id'=>'form_', 'enctype'=>'multipart/form-data', 'file'=>true]) !!}
    @include ('especialidade::_form')
    {!! Form::close() !!}
@stop
