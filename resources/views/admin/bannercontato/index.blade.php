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
                    <th>Titulo</th>
                    <th>Conteúdo</th>
                    <th>Numero</th> 
                    <th>URL Numero</th>
                    <th>Editar</th> 
                </tr>                 
                </thead>
                <tbody>
                    @foreach($banners as $banner)
                        <tr>
                            <td><img src="{{url("storage/$banner->imagem")}}" alt="{{$banner->titulo}}" style="max-width: 150px;"></td>
                            <td>{{$banner->titulo}}</td>
                            <td>{{$banner->conteudo}}</td>
                            <td>{{$banner->numero}}</td>
                            <td>{{$banner->url_numero}}</td>
                            <td><a class="btn btn-success" href="/admin/banner/editar/{{$banner->id}}">Editar</a></td>
                       </tr>
                    @endforeach                    
                </tbody>
            </table>
        </div>

        <div class="row">            
            <a href="{{url('/#contact_action_area')}}" class="btn btn-success">Veja em tempo real</a>            
        </div>

    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


