@extends('layout')
@section('title',"Carros")

@section('content')


<div class="row">
	<div class="col">
		<div class="clearfix">
		<span class="float-left">
			<h1>Listado de Carros</h1>
		</span>
		
		<span class="float-right">
			<a href="{{url('/carros/nuevo')}}" class="btn btn-success">Crear nuevo Carro</a>
		</span>
		</div>
	</div>
</div>
<hr>

<table class="table table-dark">
	<thead>
		<tr>
			<th>#</th>
			<th>MARCA</th>
			<th>MODELO</th>
			<th>ACCIONES</th>

		</tr>

	</thead>
	<tbody>
    

@if(!empty($carro))
    
	
@foreach($carro as $automovil)
<tr>
<td>{{$automovil->id}} </td>
<td>{{$automovil->marca}}</td>
<td>{{$automovil->modelo}}</td>
<td>

<a href="{{route('carid',['id'=>$automovil->id])}}" class="btn btn-primary btn-sm">Ver detalle</a>
<a href="{{route('editarCar',['id'=>$automovil])}}" class="btn btn-warning btn-sm">Editar</a>

<form method="POST" action="{{route('dropCar',$automovil)}}" style="display: inline-block;">
	{{csrf_field()}}
	{{method_field('DELETE')}}
	<button type="submit" class="btn btn-danger btn-sm">Eliminar</button> 
	
</form>


</td>






@endforeach


@else
	<p>No hay carros registrados</p>
@endif
</tr>
</tbody>
</table>

@endsection
