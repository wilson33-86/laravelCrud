@extends('layout')
@section('title',"Crear Usuario")
@section('content')



@if($errors->any())
<div class="alert alert-danger">
	<h5>Por favor corrije los errores de abajo</h5>
	        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
 
</div>
@endif
 <h1 class="text-center">Editar Usuario</h1>
<div class="row  justify-content-center" >
  <div class="col-6 ">
   <div class="bg-secondary p-4">
  <form method="POST" action="{{route('updateUser',$user)}}">

  	{{csrf_field()}}

    {{method_field('PUT')}}
  	<div class="form-group">
  		<label class="text-light">Nombre:</label>
  		<input type="text" name="name" placeholder="Digite su Nombre" value="{{old('name',$user->name)}}" class="form-control">
  	
  		
  	</div>
  	<div class="form-group">
  		<label class="text-light">Correo:</label>
  		<input type="text" name="email" placeholder="Digite su Correo" value="{{old('email',$user->email)}}" class="form-control">
  	
  		
  	</div>

  		<div class="form-group">
  		<label class="text-light">Password:</label>
  		<input type="password" name="password" placeholder="Digite su clave" class="form-control">
 
  	</div>


  	<button type="submit" class="btn btn-primary">Guardar</button>
  	 <a href="{{route('users')}} " class="btn btn-link text-light">Volver Atras</a> 

  </form>
</div>
</div>
</div>
  <hr>

  
 

@endsection