@extends('adminlte::page')
@section('title', 'Força')

@section('content')
    {{ Form::open(['route'=>'forca.store','method'=>'post', 'id'=>'form_', 'data-toggle'=>"validator", 'role'=>"form"]) }}
    @include ('forca::_form')
    {{ Form::close() }}
@stop
