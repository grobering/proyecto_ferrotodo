@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Lista de Empleados</h1>
    <hr>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="table">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Telefono</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($empleados as $data)
                            <tr>
                                <td>{{$data->nombre}}</td>
                                <td>{{$data->apellidos}}</td>
                                <td>{{$data->telefono}}</td>
                                <td>{{$data->email}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

@endsection