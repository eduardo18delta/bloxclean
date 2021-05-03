@extends('adminlte::page')

@section('title', 'Listagem Menu Principal')

@section('content_header')
    <h1>Menu Principal</h1>
@stop

@section('content')
    <p>Listagem de Usuários</p>

    <div class="container-fluid">

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
                    <th>id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Tipo Usuário</th>  
                    <th>Editar</th> 
                    <th>Serviços</th> 
                    <th>Apagar</th> 
                    </tr>                 
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->nome}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->cpf}}</td>
                            <td>{{$user->tipo_usuario}}</td>
                            <td><a class="btn btn-success" href="/admin/user/editar/{{$user->id}}">Editar</a></td>
                            <td><a class="btn btn-primary" href="/admin/user/editar/{{$user->id}}">Ver Serviços</a></td>
                            <td><a class="btn btn-danger" href="">Apagar</a></td>
                        </tr>
                    @endforeach                    
                </tbody>
            </table>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop




