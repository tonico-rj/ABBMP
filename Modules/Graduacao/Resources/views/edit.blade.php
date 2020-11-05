@extends('adminlte::page')
@section('title', 'Graduação')

@section('content')
    {!! Form::model($reg,[ 'route'=>['graduacao.update', $reg->graduacao_id], 'method'=>'PUT', 'id'=>'form_', 'enctype'=>'multipart/form-data', 'file'=>true]) !!}
    @include ('graduacao::_form')
    {!! Form::close() !!}
@stop
