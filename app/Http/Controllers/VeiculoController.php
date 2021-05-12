<?php

namespace App\Http\Controllers;

use App\Models\Entity\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    
    public function index()
    {
        $veiculo = Veiculo::all();
        return response()->json($veiculo);
    }

  
    public function create(Request $request)
    {
        $veiculo = New Veiculo();

        $veiculo->fill($request->all());

        $veiculo->save();

        return response()->json($veiculo, 201);
    }

    
    public function show($id)
    {
        $veiculo = Veiculo::find($id);

        if(!$veiculo){
            return response()->json(['erro'=> 'Veiculo nao encontrado', 404]);
        }

        return response()->json($veiculo);
    }

   
    public function update($id, Request $request)
    {
        $veiculo = Veiculo::find($id);

        if(!$veiculo){
            return response()->json(['erro'=> 'Veiculo nao encontrado'], 404);

        }

        $veiculo->fill($request->all());

        $veiculo->update();

        return response()->json($veiculo, 200);
    }

  
    public function destroy($id)
    {
        $veiculo = Veiculo::find($id);

        if(!$veiculo){
            return response()->json(['erro'=> 'Veiculo nao encontrado'], 404);
        }
        $veiculo->delete();

        return response()->json(['sucesso'=> 'Veiculo excluido com sucesso'], 200);
    
    }
}