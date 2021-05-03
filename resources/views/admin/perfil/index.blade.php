@extends('adminlte::page')

@section('title', 'Listagem Menu Principal')

@section('content_header')
<h1>Perfil</h1>
@stop

@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-md-12">
            <div class="form-group">
                <label>Nome Usuário:</label>
                <input class="form-control" type="text" name="" value="{{Auth::user()->name}}" disabled="">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input class="form-control" type="text" name="" value="{{Auth::user()->email}}" disabled="">
            </div>
            <div class="form-group">
                <label>CPF:</label>
                <input class="form-control" type="text" name="" value="{{Auth::user()->cpf}}" disabled="">
            </div>
            <div class="form-group">
                <label>Data de criação:</label>
                <input class="form-control" type="text" name="" value="{{Auth::user()->created_at}}" disabled="">
            </div>
            <div class="form-group">
                <label>Última Atualização:</label>
                <input class="form-control" type="text" name="" value="{{Auth::user()->updated_at}}" disabled="">
            </div>
            <div class="form-group">
                <a class="btn btn-success" href="/admin/user/editar/{{Auth::user()->id}}">Editar Usuário</a>
            </div>
        </div>
    </div>

</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop