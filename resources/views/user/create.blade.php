@extends('layout')
@section('title',"Crear Usuario")
@section('content')



<h1 class="text-center">Crear Usuario</h1>
<div class="row justify-content-center">
<div class="col-6">
<div class="p-4" style="background-color: #DCDCDC;">
  

  <form method="POST" action="{{url('usuarios/crear')}}">

  	{{csrf_field()}}
  	<div class="form-group">
  		<label>Nombre:</label>
  		<input type="text" name="name" placeholder="Digite su Nombre" value="{{old('name')}}" class="form-control">
  		@if($errors->has('name'))
  		<p class="text-danger">{{$errors->first('name')}}</p>

  		@endif
  		
  	</div>
  	<div class="form-group">
  		<label>Correo:</label>
  		<input type="text" name="email" placeholder="Digite su Correo" value="{{old('email')}}" class="form-control">
  		@if($errors->has('email'))
  		<p class="text-danger">{{$errors->first('email')}}</p>

  		@endif
  		
  	</div>

  		<div class="form-group">
  		<label>Password:</label>
  		<input type="password" name="password" placeholder="Digite su clave" class="form-control">
  		@if($errors->has('password'))
  		<p class="text-danger">{{$errors->first('password')}}</p>

  		@endif
  	</div>


  	<button type="submit" class="btn btn-primary">Crear Usuario</button>
       <a href="{{route('users')}} " class="btn btn-link ">Volver Atras</a> 
  	

  </form>
 </div>
 </div>
 </div>

 <hr>

 
 

@endsection