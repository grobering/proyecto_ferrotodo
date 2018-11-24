@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Editar Usuario</h1>
			<hr>
			<form action="{{route('categorias.update', $user->id)}}" method="POST">
				@method('PUT')
				@csrf
				<label for="nombre">Nombre</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" value="{{$user->nombre}}">
				<label for="descripcion">Descripcion</label>
				<input type="text" class="form-control" name="descripcion" autocomplete="off" value="{{$user->descripcion}}">
				<div class="row">
					<div class="col-md-6">
						<input type="submit" class="btn btn-primary btn-block" value="Actualizar">
					</div>
					<div class="col-md-6">
						<a href="{{route('categorias.index')}}" class="btn btn-danger btn-block">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection