@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Bienvenido a la pagina de comics</h1>

    <ul>
        @foreach ($comics as $comic)
            <li>{{$comic->id}} <a href="{{route('comics.show', $comic->id)}}">{{$comic->titulo}}</a></li>
        @endforeach
    </ul>

    {{$comics->links()}}
@endsection

