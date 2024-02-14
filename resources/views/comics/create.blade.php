@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
    <h1>En esta pagina podremos crear un comic nuevo</h1>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <label for="titulo">Titulo: <br></label>
        <input type="text" name="titulo" id="titulo">
        <br>
        <label for="coleccion">Coleccion: <br></label>
        <textarea name="coleccion" id="coleccion" rows="5"></textarea>
        <br>
        <label for="genero">Genero: <br></label>
        <input type="text" name="genero" id="genero">
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection

