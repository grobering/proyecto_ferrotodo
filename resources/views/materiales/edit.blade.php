@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Editar Usuario</h1>
			<hr>
			<form action="{{route('materiales.update', $user->id)}}" method="POST">
				@method('PUT')
				@csrf
				<label for="nombre">Nombres:</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" value="{{$user->nombre}}">
				<label for="categoria">Categoria</label>
				<select name="categoria_id" class="form-control" required>
				@foreach($categoria as $data)
					<option value="{{$data->id}}">{{$data->nombre}}</option>
				@endforeach
				</select>
				
				<div class="col-md-6">
					<input type="submit" class="btn btn-primary btn-block" value="Actualizar">
				</div>
				<div class="col-md-6">
					<a href="{{route('materiales.index')}}" class="btn btn-danger btn-block">Cancelar</a>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection