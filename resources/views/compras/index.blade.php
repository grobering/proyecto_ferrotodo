@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Lista de Compras</h1>
    <hr>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <a href="{{ route('compras.create') }}" class="btn btn-primary">Registrar Nuevo</a>
            <div class="table">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Material</th>
                            <th>Cantidad</th>
                            <th>Precio Compra</th>
                            <th>Precio Venta</th>
                            <th>Proveedor</th>
                            <th>Empleado</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $data)
                            <tr>
                                <td>{{$data->material->nombre}}</td>
                                <td>{{$data->cantidad}}</td>
                                <td>{{$data->precio_c}}</td>
                                <td>{{$data->precio_v}}</td>
                                <td>{{$data->proveedor->nombre}} {{$data->proveedor->apellidos}}</td>
                                <td>{{$data->user->nombre}} {{$data->user->apellidos}}</td>
                                <td>{{$data->created_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

@endsection