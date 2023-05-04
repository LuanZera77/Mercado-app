<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    
    public function index()
    {
        $categoria = Categoria::all();
        return view('categoria.list', ['categoria' => Categoria::orderByDesc('id')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $categoria = new Categoria();
        $categoria->nome = $request->nome;
        $categoria->imagem = $request->imagem;

        if($categoria->save()){
            return redirect()->route('categoria.index');
        }else{
            dd("Erro");
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return view('show', ['categoria' => $categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('edit', ['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $categoria->nome = $request->nome;
        $categoria->imagem = $request->imagem;

        if($categoria->save()){
            return redirect()->route('categoria.index');
        }else{
            dd("Erro");
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        if($categoria->delete()){
            return redirect()->route('categoria.index');
        }else{
            dd("Erro");
        }
    }

}
