@extends('adminlte::page')

@section('title', 'Contatos Menu')

@section('content_header')
<script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <h1>Itens Home</h1>
@stop

@section('content')

    @include('sweet::alert')

    <p>Altere aqui os itens que aparecem na Home.</p>

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
                    <th>Icone</th>
                    <th>Titulo Icone</th>
                    <th>Conteúdo</th>
                    <th>Editar</th> 
                </tr>                 
                </thead>
                <tbody>
                    @foreach($itens as $item)
                            <td><img src="{{url("storage/$item->icone") }}" alt="{{$item->titulo_icone}}" style="max-width: 150px;"></td>
                            <td>{{$item->titulo_icone}}</td>
                            <td>{{$item->conteudo}}</td>
                            <td><a class="btn btn-success" href="/admin/itens/editar/{{$item->id}}">Editar</a></td>
                       </tr>
                    @endforeach                    
                </tbody>
            </table>
        </div>

        <div class="row">            
            <a href="{{url('/#itens_home')}}" class="btn btn-success">Veja em tempo real</a>            
        </div>

    </div>









@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


