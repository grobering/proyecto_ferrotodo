@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Editar Usuario</h1>
			<hr>
			<form action="{{route('clientes.update', $user->id)}}" method="POST">
				@method('PUT')
				@csrf
				<label for="nombre">Nombres</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" value="{{$user->nombre}}">
				<label for="apellidos">Apellidos</label>
				<input type="text" class="form-control" name="apellidos" autocomplete="off" value="{{$user->apellidos}}">
				<label for="telefono">Telefono</label>
				<input type="text" class="form-control" name="telefono" autocomplete="off" value="{{$user->telefono}}">
				<div class="row">
					<div class="col-md-6">
						<input type="submit" class="btn btn-primary btn-block" value="Actualizar">
					</div>
					<div class="col-md-6">
						<a href="{{route('clientes.index')}}" class="btn btn-danger btn-block">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection