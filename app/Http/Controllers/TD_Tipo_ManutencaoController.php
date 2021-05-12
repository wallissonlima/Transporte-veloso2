<?php

namespace App\Http\Controllers;

use App\Models\Entity\TD_Tipo_Manutencao;
use Illuminate\Http\Request;

class TD_Tipo_ManutencaoController extends Controller
{
   
    public function index()
    {
        $td_tipo_manutencao = Td_tipo_manutencao::all();
        return response()->json($td_tipo_manutencao);
    }

  
    public function create(Request $request)
    {
        $td_tipo_manutencao = New td_tipo_manutencao();

        $td_tipo_manutencao->fill($request->all());

        $td_tipo_manutencao->save();

        return response()->json($td_tipo_manutencao, 201);
    }

    
    public function show($id)
    {
        $td_tipo_manutencao = Td_tipo_manutencao::find($id);

        if(!$td_tipo_manutencao){
            return response()->json(['erro'=> 'td_tipo_manutencao nao encontrado', 404]);
        }

        return response()->json($td_tipo_manutencao);
    }

   
    public function update($id, Request $request)
    {
        $td_tipo_manutencao = Td_tipo_manutencao::find($id);

        if(!$td_tipo_manutencao){
            return response()->json(['erro'=> 'td_tipo_manutencao nao encontrado'], 404);

        }

        $td_tipo_manutencao->fill($request->all());

        $td_tipo_manutencao->update();

        return response()->json($td_tipo_manutencao, 200);
    }

  
    public function destroy($id)
    {
        $td_tipo_manutencao = Td_tipo_manutencao::find($id);

        if(!$td_tipo_manutencao){
            return response()->json(['erro'=> 'td_tipo_manutencao nao encontrado'], 404);
        }
        $td_tipo_manutencao->delete();

        return response()->json(['sucesso'=> 'td_tipo_manutencao excluido com sucesso'], 200);
    
    }
}