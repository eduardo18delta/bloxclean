@extends('adminlte::page')

@section('title', 'Contatos Menu')

@section('content_header')
    <h1>Editando Menu</h1>
@stop

@section('content')
    <p>Edite aqui os contatos que aparecem no topo do menu.</p>
    
<div class="container-fluid">

    @if (session('message'))
    <div class="row">
        <div class="alert alert-success">
        {{ session('message') }}
        </div>
    </div>
    @endif



        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="row">
                <div class="alert alert-danger">{{$error}}</div>
            </div>
            @endforeach
        @endif
    

    <form action="{{route('update.menu' , $menus->id)}}" method="post">
        @csrf
        @method('put')    

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label>Nome:</label>
            <input class="form-control" type="text" name="nome" value="{{$menus->nome}}">
        </div>
        <div class="form-group">
            <label>URL:</label>
            <input class="form-control" type="text" name="url" value="{{$menus->url}}">
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


