@extends('adminlte::page')

@section('title', 'Praças')

@section("css")
    <style>
        .grid {
            width: 100%;
            height: 100%;
            display: grid;
            place-items: center; /* centraliza na vertical e horizontal */
            /* align-items: center; se quiser centralizar apenas na vertical */
        }
        .centro {
            width: 100px;
            height: 100px;
            background-color: aqua;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <center>
                <img src="imagens/logo.jpeg">
            </center>
        </div>
        <div class="col-1"></div>
    </div>

@endsection
