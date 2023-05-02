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
            return view('formulario');
        } 
    }


    public function show()
    {
       $curriculos = Curriculo::all();
       $curriculos = Curriculo::paginate(1);

        return view('curriculos', compact('curriculos'));    
    }


    public function edit($id) 
    {
        $curriculo = Curriculo::find($id);

        return view('editar', compact('curriculo'));  
    }


    public function update(Request $request, $id)
    {
        $dadosFormulario = $request->except('_token', 'submit');
        $curriculo = Curriculo::find($id);
        $this->validate($request, $curriculo->rules, $curriculo->messages);

        if($request -> hasFile('pdf')) {
            if($curriculo -> getAttributes()['nome_arquivo'] != NULL) {
                Storage::disk('public') -> delete($curriculo->getAttributes()['nome_arquivo']);
                $arquivo = $request -> file('pdf') -> store('storage', 'public');
                $dadosFormulario['nome_arquivo'] = $arquivo;
            }
        } else {
            unset($dadosFormulario['nome_arquivo']);
        }

        $update = $curriculo->update($dadosFormulario);

        $curriculos = Curriculo::all();

        if($update) {
            return view ('curriculos', compact('curriculos'));
        }
    }


    public function destroy($id)
    {
        $curriculo = Curriculo::find($id);
        if($curriculo -> getAttributes()['nome_arquivo'] != NULL) {
            Storage::disk('public') -> delete($curriculo->getAttributes()['nome_arquivo']);
        }

        $delete = $curriculo -> delete();

        $curriculos = Curriculo::all();

        if($delete) {
            return view ('curriculos', compact('curriculos'));
        }
    }
}
