@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Registrar Cliente</h1>
			<form action="{{route('clientes.store')}}" method="POST">
			@csrf
		        <label for="nombre">Nombres</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" required>
				<label for="apellidos">Apellidos</label>
				<input type="text" class="form-control" name="apellidos" autocomplete="off">
				<label for="telefono">Telefono</label>
				<input type="text" class="form-control" name="telefono" autocomplete="off" required>
				
				<a href="{{ route('clientes.index') }}" class="btn btn-danger">Cancelar</a>
		        <button type="submit" class="btn btn-primary">Registrar</button>
		    </form>  
		</div>
    </div>
</div>

@endsection