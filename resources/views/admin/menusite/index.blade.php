@extends('adminlte::page')

@section('title', 'Listagem Menu Principal')

@section('content_header')
    <h1>Menu Principal</h1>
@stop

@section('content')
    <p>Listagem do Menu Principal</p>

    <div class="container-fluid">

        @include('sweet::alert')
        
    @if (session('message'))
        <div class="row">
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        </div>
    @endif

        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Ordem</th>
                    <th>Nome</th>
                    <th>URL</th>
                    <th>Editar</th>  
                    <th>Apagar</th> 
                    </tr>                 
                </thead>
                <tbody>
                    @foreach($menus as $menu)
                        <tr>
                            <td>{{$menu->id}}</td>
                            <td>{{$menu->nome}}</td>
                            <td>{{$menu->url}}</td>
                            <td><a class="btn btn-success" href="/admin/menu/editar/{{$menu->id}}">Editar</a></td>
                            <td><a class="btn btn-danger" href="">Apagar</a></td>
                        </tr>
                    @endforeach                    
                </tbody>
            </table>
        </div>

        <div class="row">
            <a class="btn btn-success" href="">Adcionar novo item</a>
        </div>
    </div>









@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


