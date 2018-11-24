@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Registrar Material</h1>
			<form action="{{route('materiales.store')}}" method="POST">
			@csrf
		        <label for="nombre">Nombre</label>
				<input type="text" class="form-control tuInput" name="nombre" autocomplete="off" required>
				<label for="categoria">Categoria</label>
				<select name="categoria_id" class="form-control" required>
				@foreach($categoria as $data)
					<option value="{{$data->id}}">{{$data->nombre}}</option>
				@endforeach
				</select>
				
				<a href="{{ route('materiales.index') }}" class="btn btn-danger">Cancelar</a>
		        <button type="submit" class="btn btn-primary">Registrar</button>
			</form>
		</div>
    </div>
</div>
@endsection