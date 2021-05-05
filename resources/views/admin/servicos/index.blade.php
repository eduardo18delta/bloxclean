@extends('adminlte::page')

@section('title', 'Contatos Menu')

@section('content_header')
<script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <h1>Serviços</h1>
@stop

@section('content')

    @include('sweet::alert')

    <p>Altere aqui os Serviços que aparecem na Home.</p>

    @if (session('message'))
    <div class="row">
        <div class="alert alert-success">
        {{ session('message') }}
        </div>
    </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Titulo Item</th>
                    <th>Conteúdo</th>
                    <th>Editar</th> 
                </tr>                 
                </thead>
                <tbody>
                    @foreach($servicos as $servico)
                        <tr>
                            <td><img src=" {{url("storage/$servico->image") }}" alt="{{$servico->titulo_item}}" style="max-width: 150px;"></td>
                            <td>{{$servico->titulo_item}}</td>
                            <td>{{$servico->conteudo}}</td>
                            <td><a class="btn btn-success" href="/admin/servicos/editar/{{$servico->id}}">Editar</a></td>
                       </tr>
                    @endforeach                    
                </tbody>
            </table>
        </div>

        <div class="row">            
            <a href="{{url('/#servicos_home')}}" class="btn btn-success">Veja em tempo real</a>            
        </div>

    </div>









@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


