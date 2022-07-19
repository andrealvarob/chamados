<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateChamado;

class ChamadoController extends Controller{

    public function index(){
        $chamados = Chamado::orderby('titulo')->get();
        //dd($chamados);

        return view('chamados.index', compact('chamados')); 
    }

    public function show($id){
        if(!$chamado = Chamado::find($id))
            return redirect()->back();
        

        return view('chamados.show', compact('chamado'));
    }

    public function create(){
        return view('chamados.create');
    }

    public function store(UpdateChamado $request){
        $data = $request->all();
        
        $chamado = Chamado::create($data);

        return redirect()->route('chamados.index');
    }
}