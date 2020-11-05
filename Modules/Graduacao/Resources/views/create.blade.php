@extends('adminlte::page')
@section('title', 'Graduação')

@section('content')
    {{ Form::open(['route'=>'graduacao.store','method'=>'post', 'id'=>'form_', 'data-toggle'=>"validator", 'role'=>"form"]) }}
    @include ('graduacao::_form')
    {{ Form::close() }}
@stop
