<?php

namespace App\Http\Controllers;

use App\Models\Diretor;
use Illuminate\Http\Request;

class DiretorController extends Controller
{
    public function index()
{
    $diretor = Diretor::all();
    return view('diretor.index', compact('diretor'));
}

public function create()
{
    return view('diretor.create');
}

public function store(Request $request)
{
    Diretor::create($request->all());
    return redirect('diretor')->with('success', 'diretor created successfully.');
}

public function edit($id)
{
    $diretor = Diretor::findOrFail($id);
    return view('diretor.edit', compact('diretor'));
}

public function update(Request $request, $id)
{
    $diretor = Diretor::findOrFail($id);
    $diretor->update($request->all());
    return redirect('diretor')->with('success', 'diretor updated successfully.');
}

public function destroy($id)
{
    $diretor = Diretor::findOrFail($id);
    $diretor->delete();
    return redirect('diretor')->with('success', 'diretor deleted successfully.');
}
}
