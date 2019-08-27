@extends('layout')
@section('title',"Usuarios")

@section('content')
  
     <div class="clearfix">
            <div class="float-left">
             
                <h1>{{$title}}</h1>
                
            </div>
               <div class="float-right">
                  <a class="btn btn-success" href="{{ route('nuevoUser') }}"> Crear Nuevo Usuario</a>
               </div>
     </div>

     @if($message = Session::get('success'))
     <div class="alert alert-success">
       <p>{{$message}}</p>
     </div>

     @elseif($message = Session::get('danger'))
     <div class="alert alert-danger">
       <p>{{$message}}</p>
     </div>
     @endif
     <hr>
  

  <table class="table table-dark table-striped">
<thead>
  <tr>
    <th>No.</th>
    <th>USUARIO</th>
    <th>EMAIL</th>
    <th>ACCION</th>
  </tr>
</thead>
<tbody>
 
@forelse($users as $user)
   <tr>
    <td><b>{{++$i}}.</b></td>
    <td>{{$user->name}} </td>
    <td>{{$user->email}}</td>
    <td>

     <a href="{{ route('user.show',['id'=>$user->id])}}"><button class="btn btn-info btn-sm "><i class="fas fa-eye "></i></button></a>
    
     <a href="{{ route('editarUser',['id'=>$user->id])}}"><button class="btn btn-warning btn-sm" ><i class="fas fa-pencil-alt "></i></button> </a>

   <form action="{{route('borrarUser',$user)}}" method="POST" style="display: inline-block;">
   {{csrf_field()}}
   {{method_field('DELETE')}}
   <button class="btn btn-danger btn-sm " type="submit"> <i class="fas fa-trash-alt"></i></button>

 </form>
 </td>
 </tr>
  @empty

     <p>No hay usuarios registrados</p>
     
     

@endforelse

</tbody>
</table>

{!!$users->links()!!}

@endsection


