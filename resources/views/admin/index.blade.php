@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard BoxClean</h1>
@stop

@section('content')

    <div class="row">

        <div class="col">
            <a href="admin/menu/listar">
            <div class="card bg-secondary text-white">
                <div class="card-body">
                    <h6 class="card-title">Relatórios</h6>
                </div>
            </div>
            </a>
        </div>
      
        <div class="col">
                <a href="/personalizar">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h6 class="card-title">Personalizar</h6>
                    </div>
                </div>
                </a>
        </div>
    </div>

    <div class="row">

        <div class="col">
            <a href="/">
            <div class="card bg-secondary text-white">
                <div class="card-body">
                    <h6 class="card-title">Ver Site</h6>
                </div>
            </div>
            </a>
        </div>
      
        <div class="col">
                <a href="">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h6 class="card-title">#</h6>
                    </div>
                </div>
                </a>
        </div>

    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
