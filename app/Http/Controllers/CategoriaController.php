<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function home(){
        return view('home', ['categoria' => Categoria::orderByDesc('id')->get()]);
    }
    
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
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $input = $request->validate([
            'name' => ['required', 'string'],
            'imagem' => ['required','file']
        ]);

        $categoria = new Categoria();
        $categoria->nome = $request->nome;
        $categoria->imagem = $request->imagem;

        $input['logo']->store('categorias', 'public');

        if($categoria->save()){
            return redirect()->route('home');
        }else{
            dd("Erro");
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categorium)
    {
        return view('show', ['categoria' => $categorium]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categorium)
    {
        return view('categoria.edit', ['categoria' => $categorium]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categorium)
    {
        $categorium->nome = $request->nome;
        $categorium->imagem = $request->imagem;

        if($categorium->save()){
            return redirect()->route('home');
        }else{
            dd("Erro");
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categorium)
    {
        
        if($categorium->delete()){
            return redirect()->route('home');
        }else{
            dd("Erro");
        }
    }

}
