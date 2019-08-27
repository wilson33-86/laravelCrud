@extends('layout')
@section('title',"Usuario id {$user->id}")
@section('content')

<h1>{{$user->name}}</h1>
  <p>detalle del usuario Id: {{$user->id}}</p>

  <ul>
  	<li>{{$user->name}}</li>
  	<li>{{$user->email}}</li>
  	
  </ul>
  <a href="{{route('users')}}">Volver Atras</a>
 

@endsection