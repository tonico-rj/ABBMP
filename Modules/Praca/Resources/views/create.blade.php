@extends('adminlte::page')
@section('title', 'Praças')

@section('content')
    {{ Form::open(['route'=>'praca.store','method'=>'post', 'id'=>'form_', 'data-toggle'=>"validator", 'role'=>"form"]) }}
    @include ('praca::_form')
    {{ Form::close() }}
@stop
