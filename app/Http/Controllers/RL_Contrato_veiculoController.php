<?php

namespace App\Http\Controllers;

use App\Models\Entity\RL_Contrato_Veiculo;
use Illuminate\Http\Request;

class RL_Contrato_veiculoController extends Controller
{
    
    public function index()
    {
        $rl_contrato_veiculo = Rl_contrato_veiculo::all();
        return response()->json($rl_contrato_veiculo);
    }

  
    public function create(Request $request)
    {
        $rl_contrato_veiculo = New Rl_contrato_veiculo();

        $rl_contrato_veiculo->fill($request->all());

        $rl_contrato_veiculo->save();

        return response()->json($rl_contrato_veiculo, 201);
    }

    
    public function show($id)
    {
        $rl_contrato_veiculo = Rl_contrato_veiculo::find($id);

        if(!$rl_contrato_veiculo){
            return response()->json(['erro'=> 'Rl_contrato_veiculo nao encontrado', 404]);
        }

        return response()->json($rl_contrato_veiculo);
    }

   
    public function update($id, Request $request)
    {
        $rl_contrato_veiculo = Rl_contrato_veiculo::find($id);

        if(!$rl_contrato_veiculo){
            return response()->json(['erro'=> 'Rl_contrato_veiculo nao encontrado'], 404);

        }

        $rl_contrato_veiculo->fill($request->all());

        $rl_contrato_veiculo->update();

        return response()->json($rl_contrato_veiculo, 200);
    }

  
    public function destroy($id)
    {
        $rl_contrato_veiculo = Rl_contrato_veiculo::find($id);

        if(!$rl_contrato_veiculo){
            return response()->json(['erro'=> 'Rl_contrato_veiculo nao encontrado'], 404);
        }
        $rl_contrato_veiculo->delete();

        return response()->json(['sucesso'=> 'Rl_contrato_veiculo excluido com sucesso'], 200);
    
    }
}