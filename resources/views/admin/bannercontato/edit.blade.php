@extends('adminlte::page')

@section('title', 'Contatos Menu')

@section('content_header')
    <h1>Editando Itens LandingPage</h1>
@stop

@section('content')
    <p>Edite aqui os Itens da Home.</p>
    
<div class="container-fluid">
    
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="row">
                <div class="alert alert-danger">{{$error}}</div>
            </div>
            @endforeach
        @endif
    

    <form action="{{route('update.banner' , $banners->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')    

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <small>imagem Atual: {{$banners->imagem}}</small>
            <img src="{{url("storage/$banners->imagem") }}" alt="{{$banners->titulo}}" style="max-width: 400px; margin-left: 10px; border: 0.1em solid black; padding: 3px;">
        </div>
        <div class="form-group">
            <label>Novo Banner:</label>            
            <input class="form-control-file" type="file" name="imagem">                            
        </div>
        <div class="form-group">
            <label>Titulo:</label>
            <input class="form-control" type="text" name="titulo" value="{{$banners->titulo}}">
        </div>
        <div class="form-group">
            <label>Conteudo:</label>
            <textarea class="form-control" name="conteudo" cols="30" rows="5" >
            {{$banners->conteudo}}
            </textarea>
        </div>
        <div class="form-group">
            <label>Número:</label>
            <input class="form-control" type="text" name="numero" value="{{$banners->numero}}">
        </div>
        <div class="form-group">
            <label>URL Número:</label>
            <input class="form-control" type="text" name="url_numero" value="{{$banners->url_numero}}">
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


