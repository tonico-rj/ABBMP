@extends('adminlte::page')
@section('title', 'Praças')

@section('content')
    {!! Form::model($praca,[ 'route'=>['praca.update', $praca->praca_id], 'method'=>'PUT', 'id'=>'form_', 'enctype'=>'multipart/form-data', 'file'=>true]) !!}
    <div class="row">
        @include ('praca::_form')
    </div>
    {!! Form::close() !!}
@stop
