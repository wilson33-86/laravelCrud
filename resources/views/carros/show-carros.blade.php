@extends('layout')
@section('title',"Carro id {$carro->id}")
@section('content')

<h1>Carro #{{$carro->id}}</h1>
  <p> Mostrando detalle del carro: {{$carro->id}}</p>

  <ul>
  	<li>{{$carro->marca}}</li>
  	<li>{{$carro->modelo}}</li>
  	
  </ul>
  <a href="{{route('carros')}}">Volver Atras</a>
 

@endsection