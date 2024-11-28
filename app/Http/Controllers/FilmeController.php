<?php

namespace App\Http\Controllers;

use App\Models\Diretor;
use App\Models\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function index()
{
    $filme = Filme::all();
    return view('filme.index', compact('filme'));
}

public function create()
{
    $diretor = Diretor::all();
    return view('filme.create', compact('diretor'));

}

public function store(Request $request)
{   

    

    $filme = new Filme();
        $filme->titulo = $request->titulo;
        $filme->ano = $request->ano;
        $filme->genero = $request->genero;
        $filme->diretor_id = $request->diretor_id;
        $filme->save();

    return redirect('filme')->with('success', 'filme created successfully.');
}

public function edit($id)
{
    $filme = Filme::findOrFail($id);
    $diretor = Diretor::all();
    return view('filme.edit', compact('filme','diretor'));

    
}

public function update(Request $request, $id)
{
    $filme = Filme::findOrFail($id);
    $filme->update($request->all());
    return redirect('filme')->with('success', 'filme updated successfully.');
}

public function destroy($id)
{
    $filme = Filme::findOrFail($id);
    $filme->delete();
    return redirect('filme')->with('success', 'filme deleted successfully.');
}
}
