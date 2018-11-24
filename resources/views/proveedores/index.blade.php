@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Lista de Proveedores</h1>
    <hr>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <a href="{{ route('proveedores.create') }}" class="btn btn-primary">Registrar Nuevo</a>
            <div class="table">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th colspan="2">Acciones</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Telefono</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $data)
                            <tr>
                                <td width="10px">
                                    <a href="{{route('proveedores.edit', $data->id)}}" class="btn btn-success btn-sm">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('proveedores.destroy', $data->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                                <td>{{$data->nombre}}</td>
                                <td>{{$data->apellidos}}</td>
                                <td>{{$data->telefono}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

@endsection