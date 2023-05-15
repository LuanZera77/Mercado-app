<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        //$produto = Produto::all();
        return view('produto.list', ['produtos' => Produto::orderByDesc('id')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('produto.create', ['categoria'=> Categoria::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $input = $request->validade([
        //     'imagem' => ['required', 'file']
        // ]);

        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $imagemPath = $request->file('imagem')->store('produto', 'public');
        $produto->imagem = $imagemPath;
        $produto->categoria_id = $request->categoria;
        
        if($produto->save()){
            return redirect()->route('home');
        }else{
            dd("Erro");
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view('produto.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
     //return $produto; 
        return view('produto.edit', [
            'produto' => $produto,
            'categorias' => Categoria::where('id', '<>', $produto->categoria->id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $imagemPath = $request->file('imagem')->store('produto', 'public');
        $produto->imagem = $imagemPath;
        $produto->categoria_id = $request->categoria;

        if($produto->save()){
            return redirect()->route('home');
        }else{
            dd("Erro");
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        if($produto->delete()){
            return redirect()->route('home');
        }else{
            dd("Erro");
        }
    }
}
