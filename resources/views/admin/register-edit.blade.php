@extends('layouts.master')


@section('title')

Editar Usuários Registrados

@endsection



@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Editar usuários registrados</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="/editar-permissoes/{{ $users->id }}" method="post">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" name="username" value="{{$users->name}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Permissões de usuário</label>
                                    <select name="usertype" class="form-control">
                                        <option value="admin">Administrador</option>
                                        <option value="user">Usuário</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-info">Salvar</button>
                                <a href="/usuarios" class="btn btn-danger">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection



@section('scripts')



@endsection