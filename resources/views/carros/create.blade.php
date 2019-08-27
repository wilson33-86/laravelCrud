@extends('layout')
@section('title','Crear Carro')

@section('content')
<div>
<h2>Crear Carro</h2>

@if($errors->any())
<div class="alert alert-danger">
<p>Por favor llene los campos</p>

</div>
@endif
<form method="POST" action="{{url('carros/crear')}}">
	{{csrf_field()}}
	<div class="form-group">
		<label>Marca:</label>
		 <input type="text" name="marca" class="form-control" value="{{old('marca')}}" placeholder="Digite una Marca">
          @if($errors->has('marca'))
            <p class="text-danger">{{$errors->first('marca')}}</p>
          @endif

		
	</div>

	<div class="form-group">
		<label>Modelo:</label>
		<input type="text" name="modelo" class="form-control" value="{{old('modelo')}}" placeholder="Digite una Modelo">
		@if($errors->has('modelo'))
         <p class="text-danger">{{$errors->first('modelo')}}</p>
		@endif
		
	</div>

	<button type="submit" class="btn btn-primary ">Guardar</button>
	<a href="{{route('carros')}}" class="btn btn-link">Volver atras</a>
</form>

@endsection

