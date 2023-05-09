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
        $produto = new Produto();
        $produto->name = $request->name;
        $produto->preco = $request->preco;
        $produto->imagem = $request->imagem;
        $produto->categoria = $request->categoria;

        if($produto->save()){
            return redirect()->route('produto.index');
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
        return view('produto.edit', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->name = $request->name;
        $produto->preco = $request->preco;
        $produto->imagem = $request->imagem;
        $produto->categoria = $request->categorias;

        if($produto->save()){
            return redirect()->route('produto.index');
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
            return redirect()->route('produto.index');
        }else{
            dd("Erro");
        }
    }
}
