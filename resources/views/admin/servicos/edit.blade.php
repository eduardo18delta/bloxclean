@extends('adminlte::page')

@section('title', 'Contatos Menu')

@section('content_header')
    <h1>Editando Serviços LandingPage</h1>
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
    

    <form action="{{route('update.servicos' , $servicos->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')    

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <small>imagem Atual: {{$servicos->image}}</small> 
            <img src="{{url("storage/$servicos->image") }}" alt="{{$servicos->titulo_item}}" style="max-width: 100px; margin-left: 10px; border: 0.1em solid black; padding: 3px;">
        </div>
        <div class="form-group">
            <label>Imagem:</label>            
            <input class="form-control" type="file" name="image">   
            <small>Tamanho Recomendado: 362x258</small>                         
        </div>
        <div class="form-group">
            <label>Titulo Item:</label>
            <input class="form-control" type="text" name="titulo_item" value="{{$servicos->titulo_item}}">
        </div>
        <div class="form-group">
            <label>Conteudo:</label>
            <textarea class="form-control" name="conteudo" cols="30" rows="5" >
            {{$servicos->conteudo}}
            </textarea>
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


