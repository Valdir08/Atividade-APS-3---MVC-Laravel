<?php
namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;
class CategoriaController extends Controller {
    public function index() {
        $categorias = Categoria::orderBy('nome')->get();
        return view('categorias', compact('categorias'));
    }
    public function store(Request $request) {
        $validated = $request->validate([ 'nome'=>'required', ]);
        Categoria::create($validated);
        return redirect()->route('categorias.index')->with('success','OK');
    }
}