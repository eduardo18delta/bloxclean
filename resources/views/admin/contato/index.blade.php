@extends('adminlte::page')

@section('title', 'Contatos Menu')

@section('content_header')
    <h1>Contatos Menu</h1>
@stop

@section('content')
    <p>Altere aqui os contatos que aparecem no topo do menu.</p>


    
    @if (session('message'))
    <div class="row">
        <div class="alert alert-success">
        {{ session('message') }}
        </div>
    </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Ordem</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Titulo Botão</th>  
                    <th>URL Botão</th> 
                    <th>Editar</th> 
                </tr>                 
                </thead>
                <tbody>
                    @foreach($contatos as $contato)
                        <tr>
                            <td>{{$contato->id}}</td>
                            <td>{{$contato->email}}</td>
                            <td>{{$contato->telefone}}</td>
                            <td>{{$contato->titulo_botao}}</td>
                            <td>{{$contato->url_botao}}</td>
                            <td><a class="btn btn-success" href="/admin/contato/editar/{{$contato->id}}">Editar</a></td>
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

@section('js')
    <script> console.log('Hi!'); </script>
@stop


