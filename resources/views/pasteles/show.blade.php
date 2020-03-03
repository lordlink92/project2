@extends('layout')

@section('title',"Pastel #{$id}")

@section('content')
<br><br>
    <h1>Pastel #{{$id}}</h1>
    Mostrando el detalle del  {{$titulo}}
    <br>

    <a href="{{ route('pasteles.todos') }}">volver</a>
<br>
    <a href="{{ route('pasteles.crear') }}">añadir nuevo</a>

@endsection

