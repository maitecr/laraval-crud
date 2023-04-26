<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculo;
use Storage;


class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $dadosFormulario = $request->except('_token');
        $curriculo = new Curriculo();
        $this->validate($request,$curriculo->rules,$curriculo->messages);

        if($request -> hasFile('pdf')) {
            $arquivo = $request->file('pdf')->store('storage','public');
            $dadosFormulario['nome_arquivo'] = $arquivo;
        } 

        $insert = $curriculo::create($dadosFormulario);

        if($insert) {
            return "Dados inseridos";
        } else {
            return "Não inseridos";
        } 

//        dd($dadosFormulario);

 //       return $dadosFormulario;
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('curriculos');    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) //precisa indicar o id - ver como deixar id opcional
    {
        return view('atualizar', $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "$id deletado da base de dados";
    }
}
