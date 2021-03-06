@extends('layouts.app')

@section('content')
    <a href=" {{ Route('admin.products.create') }} " class="btn btn-lg btn-success">Criar produto</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $p)
            <tr>
                <td> {{$p->id}} </td>
                <td> {{$p->name}} </td>
                <td>
                    <a href=" {{Route('admin.products.edit', ['product' => $p->id])}} " class="btn btn-sm btn-primary">EDITAR</a>
                    <a href=" {{Route('admin.products.destroy', ['product' => $p->id])}} " class="btn btn-sm btn-danger">REMOVER</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$products->links()}}

@endsection