@extends('layout')
@section('title','Editar carro')

@section('content')

<h2>Editar Carro</h2>

@if($errors->any())
<div class="alert alert-danger">
<p>Por favor llene los campos que faltan</p>

</div>
@endif
<form method="POST" action="{{route('updatCar',$carro)}}">
	{{csrf_field()}}
	{{method_field('PUT')}}
	<div class="form-group">
		<label>Marca:</label>
		 <input type="text" name="marca" class="form-control" value="{{old('marca',$carro->marca)}}" placeholder="Digite una Marca">
          @if($errors->has('marca'))
            <p class="text-danger">{{$errors->first('marca')}}</p>
          @endif

		
	</div>

	<div class="form-group">
		<label>Modelo:</label>
		<input type="text" name="modelo" class="form-control" value="{{old('modelo',$carro->modelo)}}" placeholder="Digite una Modelo">
		@if($errors->has('modelo'))
         <p class="text-danger">{{$errors->first('modelo')}}</p>
		@endif
		
	</div>

	<button type="submit" class="btn btn-primary ">Actualizar</button>
	<a href="{{route('carros')}}" class="btn btn-link">Volver atras</a>
</form>


@endsection