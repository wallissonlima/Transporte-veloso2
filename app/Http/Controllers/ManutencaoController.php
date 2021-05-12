<?php

namespace App\Http\Controllers;

use App\Models\Entity\Manutencao;
use Illuminate\Http\Request;

class ManutencaoController extends Controller
{
    
    public function index()
    {
        $manutencao = Manutencao::all();
        return response()->json($manutencao);
    }

  
    public function create(Request $request)
    {
        $manutencao = New Manutencao();

        $manutencao->fill($request->all());

        $manutencao->save();

        return response()->json($manutencao, 201);
    }

    
    public function show($id)
    {
        $manutencao = Manutencao::find($id);

        if(!$manutencao){
            return response()->json(['erro'=> 'Manutencao nao encontrado', 404]);
        }

        return response()->json($manutencao);
    }

   
    public function update($id, Request $request)
    {
        $manutencao = Manutencao::find($id);

        if(!$manutencao){
            return response()->json(['erro'=> 'Manutencao nao encontrado'], 404);

        }

        $manutencao->fill($request->all());

        $manutencao->update();

        return response()->json($manutencao, 200);
    }

  
    public function destroy($id)
    {
        $manutencao = Manutencao::find($id);

        if(!$manutencao){
            return response()->json(['erro'=> 'Manutencao nao encontrado'], 404);
        }
        $manutencao->delete();

        return response()->json(['sucesso'=> 'Manutencao excluido com sucesso'], 200);
    
    }
}