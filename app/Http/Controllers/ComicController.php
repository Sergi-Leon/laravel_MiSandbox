<?php

namespace App\Http\Controllers;
use App\Models\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index() {
        $comics = Comic::orderBy('id','desc')->paginate(20);
        return view('comics.index', compact('comics'));
    }

    public function create() {
        return view('comics.create');
    }

    public function show($id) {
        $comic=Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    public function store(Request $request) {
        $comic = new Comic;
        $comic->titulo = $request->titulo;
        $comic->coleccion = $request->coleccion;
        $comic->genero = $request->genero;
        $comic->save();
        return redirect()->route('comics.show',$comic->id);
    }

    public function edit($id) {
        $comic = Comic::find($id);
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic) {
        $comic->titulo = $request->titulo;
        $comic->coleccion = $request->coleccion;
        $comic->genero = $request->genero;
        $comic->save();
        return redirect()->route('comics.show',$comic->id);
    }

    public function destroy(Comic $comic) {
        $comic -> delete();
        return redirect()->route('comics.index');
    }
}
