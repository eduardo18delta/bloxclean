@extends('adminlte::page')

@section('title', 'Contatos Menu')

@section('content_header')
    <h1>Editando Contatos Menu</h1>
@stop

@section('content')
    <p>Edite aqui os contatos que aparecem no topo do menu.</p>
    
<div class="container-fluid">
    
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="row">
                <div class="alert alert-danger">{{$error}}</div>
            </div>
            @endforeach
        @endif
    

    <form action="{{route('update.contato' , $contatos->id)}}" method="post">
        @csrf
        @method('put')    

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label>Email:</label>
            <input class="form-control" type="text" name="email" value="{{$contatos->email}}">
        </div>
        <div class="form-group">
            <label>Telefone:</label>
            <input id="telefone" class="form-control" type="text" name="telefone" value="{{$contatos->telefone}}">
        </div>
        <div class="form-group">
            <label>Título Botão:</label>
            <input class="form-control" type="text" name="titulo_botao" value="{{$contatos->titulo_botao}}">
        </div>
        <div class="form-group">
            <label>URL Botão:</label>
            <input class="form-control" type="text" name="url_botao" value="{{$contatos->url_botao}}">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="enviar" value="Enviar">
        </div>
    </div>

    </form>
</div>

</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script type="text/javascript" src="{{ asset('js/jquery.mask.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('#telefone').mask('(00) 00000-0000');
        });
    </script>
    
@stop


