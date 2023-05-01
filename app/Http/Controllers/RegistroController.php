<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculo;
use Storage;


class RegistroController extends Controller
{

    public function index()
    {
        //return view('welcome');
    }


    public function create()
    {
        return view('formulario');
    }


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
    }


    public function show()
    {
       $curriculos = Curriculo::all();

        return view('curriculos', compact('curriculos'));    
    }


    public function edit(int $id) 
    {
        $curriculo = Curriculo::find($id);

        return view('atualizar', compact('curriculo'));  
    }


    public function update(Request $request, int $id)
    {
        $dadosFormulario = $request->except('_token', 'submit');
        $curriculo = Curriculo::find($id);
        $this->validate($request,$curriculo->rules,$curriculo->messages);

        if($request -> hasFile('pdf')) {
            if($curriculo->getAttributes()['nome_arquivo'] !=NULL)
                Storage::disk('public')->delete($curriculo->getAttributes()['nome_arquivo']);
                $arquivo = $request->file('pdf')->store('storage','public');
                $dadosFormulario['nome_arquivo'] = $arquivo;
        } 

        $update = $curriculo::update($dadosFormulario);

        if($update) {
            return view('curriculos');       
        } 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $curriculo = Curriculo::find($id);
        if($curriculo->getAttributes()['nome_arquivo'] !=NULL) // testa se tinha um nome de arquivo no banco
        Storage::disk('public')->delete($curriculo->getAttributes()['nome_arquivo']);
        $delete = $curriculo->delete();

        if($delete) {        
            return "deletadp";
        }

    }
}
