@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Realizar Compra</h1>
			<form action="{{route('compras.store')}}" method="POST">
			@csrf
		        <label for="material_id">Material</label>
		        <select name="material_id" class="form-control" required>
				@foreach($material as $data)
					<option value="{{$data->id}}">{{$data->nombre}}</option>
				@endforeach
				</select>
				<label for="cantidad">Cantidad</label>
				<input type="number" class="form-control " name="cantidad" autocomplete="off" required>
				<label for="precio_c">Precio de Compra</label>
				<input type="number" class="form-control " name="precio_c" autocomplete="off" required>
				<label for="precio_v">Precio de Venta</label>
				<input type="number" class="form-control " name="precio_v" autocomplete="off" required>
				<label for="proveedor_id">Proveedor</label>
				<select name="proveedor_id" class="form-control" required>
				@foreach($proveedor as $data)
					<option value="{{$data->id}}">{{$data->nombre}} {{$data->apellidos}}</option>
				@endforeach
				</select>
				<input type="number" class="form-control " name="user_id" value="{{Auth::user()->id}}" required hidden>
				<a href="{{ route('compras.index') }}" class="btn btn-danger">Cancelar</a>
		        <button type="submit" class="btn btn-primary">Registrar</button>
			</form>
		</div>
    </div>
</div>
@endsection