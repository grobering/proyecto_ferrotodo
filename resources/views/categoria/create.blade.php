@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Registrar Categoria</h1>
			<form action="{{route('categorias.store')}}" method="POST">
			@csrf
		        <label for="nombre">Nombre</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" required>
				<label for="descripcion">Descripcion</label>
				<input type="text" class="form-control" name="descripcion" autocomplete="off">
				
				<a href="{{ route('categorias.index') }}" class="btn btn-danger">Cancelar</a>
		        <button type="submit" class="btn btn-primary">Registrar</button>
		      </div>
		    </div>
		  </div>
		</div>
	</form>

@endsection