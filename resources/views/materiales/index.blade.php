@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Lista de Materiales</h1>
    <hr>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <a href="{{ route('materiales.create') }}" class="btn btn-primary">Registrar Nuevo</a>
            <div class="table">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th colspan="2">Acciones</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio Compra</th>
                            <th>Precio Venta</th>
                            <th>Categoria</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $data)
                            <tr>
                                <td width="10px">
                                    <a href="{{route('materiales.edit', $data->id)}}" class="btn btn-success btn-sm">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('materiales.destroy', $data->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                                <td>{{$data->nombre}}</td>
                                <td>{{$data->cantidad}}</td>
                                <td>{{$data->precio_c}}</td>
                                <td>{{$data->precio_v}}</td>
                                <td>{{$data->categoria->nombre}}</td>
                                <td>{{$data->updated_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

@endsection