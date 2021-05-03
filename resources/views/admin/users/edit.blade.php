@extends('adminlte::page')

@section('title', 'Contatos Menu')

@section('content_header')
    <h1>Editando Usuário</h1>
@stop

@section('content')

    <div class="container-fluid">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="row">
                    <div class="alert alert-danger">{{ $error }}</div>
                </div>
            @endforeach
        @endif


        <form action="{{ route('update.usuarios', $users->id) }}" method="post">
            @csrf
            @method('put')

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input class="form-control" type="text" name="name" value="{{ $users->name }}">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input class="form-control" type="text" name="email" value="{{ $users->email }}">
                    </div>
                    <div class="form-group">
                        <label>CPF:</label>
                        <small>Por enquanto não é possivel modificar o CPF por aqui.</small>
                        <input class="form-control" type="text" name="cpf" value="{{ $users->cpf }}" disabled="">
                    </div>
                    <div class="form-group">
                        <label>Permissão:</label>
                        <small>Esta é a permissão atual, modifique com cuidado.</small>
                        <select name="tipo_usuario" id="tipo_usuario" class="form-control">
                            @if ($users->tipo_usuario == 'Admin')
                                <option value="Admin" selected="selected">Admin</option>
                                <option value="Cliente">Cliente</option>
                                <option value="Funcionario">Funcionário</option>
                            @elseif ($users->tipo_usuario == 'Cliente')
                                <option value="Cliente" selected="selected">Cliente</option>
                                <option value="Admin">Admin</option>
                                <option value="Funcionario">Funcionário</option>
                            @elseif ($users->tipo_usuario == 'Funcionario')
                                <option value="Funcionario" selected="selected">Funcionário</option>
                                <option value="Admin">Admin</option>
                                <option value="Cliente">Cliente</option>
                            @endif
                        </select>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-success btn btn-block" type="submit" name="enviar" value="Enviar">
                    </div>
                </div>
        </form>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
