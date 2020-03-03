@extends('layout')

@section('content')
<br><br>
    <h2>Lista de pasteles</h2>
    <?php //dd($pasteles); ?>
    <ul>
    @foreach ($pasteles as $pastel)
    <?php //dd($pastel->id);?>

       <li> {{$pastel}}</li> <a href={{ route('pasteles.unico',['id'=>$pastel->id]) }}> ver detalles</a>
    @endforeach
    </ul>
    <br>
    <a href="{{ route('pasteles.crear') }}">añadir nuevo</a>
@endsection
