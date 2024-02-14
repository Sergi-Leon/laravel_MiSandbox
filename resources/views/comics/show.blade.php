@extends('layouts.plantilla')

@section('title', 'Show')

@section('content')
    <h1>Bienvenido al comic {{$comic->titulo}}</h1>
    <a href="{{route('comics.index')}}">Volver a la página de comics</a>
    <br>
    <a href="{{route('comics.create')}}" method="get">Crear un comic nuevo</a>
    <br>
    <form action="{{route('comics.destroy',$comic)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar comic</button>
    </form> 
    <br>
    <a href="{{route('comics.edit',$comic->id)}}">Editar este comic</a>
    <p><strong>Genero: </strong>{{$comic->genero}}</p>
    <p>{{$comic->coleccion}}</p>
@endsection

