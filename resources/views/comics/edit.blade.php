@extends('layouts.plantilla')

@section('title', 'Actualizar comic')

@section('content')
    <h1>En esta página podremos actualizar un comic</h1>
    <form action="{{route('comics.update',$comic)}}" method="POST">
        @csrf
        @method('put')
        <label for="titulo">Titulo: <br></label>
        <input type="text" name="titulo" id="titulo" value="{{$comic->titulo}}">
        <br>
        <label for="coleccion">Coleccion: <br></label>
        <textarea name="coleccion" id="coleccion" rows="5">{{$comic->coleccion}}</textarea>
        <br>
        <label for="genero">Genero: <br></label>
        <input type="text" name="genero" id="genero" value="{{$comic->genero}}">
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection

