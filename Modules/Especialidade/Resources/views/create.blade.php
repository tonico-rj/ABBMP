@extends('adminlte::page')
@section('title', 'Especialidades')

@section('content')
    {{ Form::open(['route'=>'especialidade.store','method'=>'post', 'id'=>'form_', 'data-toggle'=>"validator", 'role'=>"form"]) }}
    @include ('especialidade::_form')
    {{ Form::close() }}
@stop
