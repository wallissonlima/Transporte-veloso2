<?php

namespace App\Http\Controllers;

use App\Models\Entity\TD_Tipo_Veiculo;
use Illuminate\Http\Request;

class TD_Tipo_VeiculoController extends Controller
{
    
    public function index()
    {
        $td_tipo_veiculo = Td_tipo_veiculo::all();
        return response()->json($td_tipo_veiculo);
    }

  
    public function create(Request $request)
    {
        $td_tipo_veiculo = New Td_tipo_veiculo();

        $td_tipo_veiculo->fill($request->all());

        $td_tipo_veiculo->save();

        return response()->json($td_tipo_veiculo, 201);
    }

    
    public function show($id)
    {
        $td_tipo_veiculo = Td_tipo_veiculo::find($id);

        if(!$td_tipo_veiculo){
            return response()->json(['erro'=> 'Td_tipo_veiculo nao encontrado', 404]);
        }

        return response()->json($td_tipo_veiculo);
    }

   
    public function update($id, Request $request)
    {
        $td_tipo_veiculo = Td_tipo_veiculo::find($id);

        if(!$td_tipo_veiculo){
            return response()->json(['erro'=> 'Td_tipo_veiculo nao encontrado'], 404);

        }

        $td_tipo_veiculo->fill($request->all());

        $td_tipo_veiculo->update();

        return response()->json($td_tipo_veiculo, 200);
    }

  
    public function destroy($id)
    {
        $td_tipo_veiculo = Td_tipo_veiculo::find($id);

        if(!$td_tipo_veiculo){
            return response()->json(['erro'=> 'Td_tipo_veiculo nao encontrado'], 404);
        }
        $td_tipo_veiculo->delete();

        return response()->json(['sucesso'=> 'Td_tipo_veiculo excluido com sucesso'], 200);
    
    }
}