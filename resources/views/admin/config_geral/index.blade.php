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
                    <th>id</th>
                    <th>logo</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Titulo Botão</th>  
                    <th>URL Botão</th> 
                    <th>Endereço</th>
                    <th>Facebook</th>
                    <th>instagram</th>
                    <th>Youtube</th>
                    <th>Linkdin</th>
                    <th>Editar</th> 
                </tr>                 
                </thead>
                <tbody>
                    @foreach($config_gerais as $config)
                        <tr>
                            <td>{{$config->id}}</td>
                            <td><img src="{{url("storage/$config->logo")}}" alt="" style="max-width: 150px;"></td>
                            <td>{{$config->email}}</td>
                            <td>{{$config->telefone}}</td>
                            <td>{{$config->titulo_botao}}</td>
                            <td>{{$config->url_botao}}</td>
                            <td>{{$config->endereco}}</td>
                            <td>{{$config->url_facebook}}</td>
                            <td>{{$config->url_instagram}}</td>
                            <td>{{$config->url_youtube}}</td>
                            <td>{{$config->url_linkedin}}</td>
                            <td><a class="btn btn-success" href="/admin/config_geral/editar/{{$config->id}}">Editar</a></td>
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


