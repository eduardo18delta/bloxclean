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
    

    <form action="{{route('update.geral' , $config_geral->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        
 

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <small>imagem Atual: {{$config_geral->logo}}</small> 
            <img src="{{url("storage/$config_geral->logo")}}" style="max-width: 100px; margin-left: 10px; border: 0.1em solid black; padding: 3px;">
        </div>
        <div class="form-group">
            <label>Logo:</label>            
            <input class="form-control" type="file" name="logo">   
            <small>Tamanho Recomendado: 250x60</small>                         
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input class="form-control" type="text" name="email" value="{{$config_geral->email}}">
        </div>
        <div class="form-group">
            <label>Telefone:</label>
            <input id="telefone" class="form-control" type="text" name="telefone" value="{{$config_geral->telefone}}">
        </div>
        <div class="form-group">
            <label>Título Botão:</label>
            <input class="form-control" type="text" name="titulo_botao" value="{{$config_geral->titulo_botao}}">
        </div>
        <div class="form-group">
            <label>URL Botão:</label>
            <input class="form-control" type="text" name="url_botao" value="{{$config_geral->url_botao}}">
        </div>

        <div class="form-group">
            <label>Endereço:</label>
            <input class="form-control" type="text" name="endereco" value="{{$config_geral->endereco}}">
        </div>

        <div class="form-group">
            <label>Facebook:</label>
            <input class="form-control" type="text" name="url_facebook" value="{{$config_geral->url_facebook}}">
        </div>

        <div class="form-group">
            <label>Instragram:</label>
            <input class="form-control" type="text" name="url_instagram" value="{{$config_geral->url_instagram}}">
        </div>

        <div class="form-group">
            <label>Youtube:</label>
            <input class="form-control" type="text" name="url_youtube" value="{{$config_geral->url_youtube}}">
        </div>

        <div class="form-group">
            <label>Linkdin:</label>
            <input class="form-control" type="text" name="url_twitter" value="{{$config_geral->url_twitter}}">
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


