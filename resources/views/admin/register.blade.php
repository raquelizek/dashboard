@extends('layouts.master')


@section('title')

Usuários Registrados

@endsection



@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Usuários Registrados</h4>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Data de Nascimento</th>
                            <th>Telefone</th>
                            <th>Tipo de usuário</th>
                            <th>Email</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->datan}}</td>
                                <td>{{$row->phone}}</td>
                                <td>{{$row->usertype}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->cidade}}</td>
                                <td>{{$row->estado}}</td>
                                <td>
                                    <a href="/editar/{{ $row->id }}" class="btn btn-info">Editar</a>
                                </td>
                                <td>
                                    <form action="/excluir-registro/ {{ $row->id }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="hidden" name="id" value="">
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



@section('scripts')



@endsection