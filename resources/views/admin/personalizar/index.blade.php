@extends('adminlte::page')

@section('title', 'Personalizar')

@section('content_header')
    <h1>Personlizar Site</h1>
@stop

@section('content')

    <div class="row">

        <div class="col">
            <a href="admin/menu/listar">
            <div class="card bg-secondary text-white">
                <div class="card-body">
                    <h6 class="card-title">Menu Principal</h6>
                </div>
            </div>
            </a>
    </div>
      
        <div class="col">
                <a href="admin/contato/listar">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h6 class="card-title">Contatos</h6>
                    </div>
                </div>
                </a>
        </div>
    </div>
    <div class="row">

        <div class="col">
            <a href="/admin/servicos/listar">
            <div class="card bg-secondary text-white">
                <div class="card-body">
                    <h6 class="card-title">Serviços</h6>
                </div>
            </div>
            </a>
    </div>
      
        <div class="col">
                <a href="/admin/itens/listar">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h6 class="card-title">Itens</h6>
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
