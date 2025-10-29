<?php
namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;
class ProdutoController extends Controller {
    public function index() {
        $produtos = Produto::with('categoria')->get();
        $categorias = Categoria::all();
        return view('produtos', compact('produtos','categorias'));
    }
    public function store(Request $request) {
        $validated = $request->validate(['nome'=>'required','preco'=>'required|numeric']);
        Produto::create($validated);
        return redirect()->route('produtos.index')->with('success','OK');
    }
}