<?php

namespace App\Http\Controllers;

use App\Models\Entity\Consumo;
use Illuminate\Http\Request;

class ConsumoController extends Controller
{
 
    public function index()
    {
        $consumo = Consumo::all();
        return response()->json($consumo);
    }

  
    public function create(Request $request)
    {
        $consumo = New Consumo();

        $consumo->fill($request->all());

        $consumo->save();

        return response()->json($consumo, 201);
    }

    
    public function show($id)
    {
        $consumo = Consumo::find($id);

        if(!$consumo){
            return response()->json(['erro'=> 'Consumo nao encontrado', 404]);
        }

        return response()->json($consumo);
    }

   
    public function update($id, Request $request)
    {
        $consumo = Consumo::find($id);

        if(!$consumo){
            return response()->json(['erro'=> 'Consumo nao encontrado'], 404);

        }

        $consumo->fill($request->all());

        $consumo->update();

        return response()->json($consumo, 200);
    }

  
    public function destroy($id)
    {
        $consumo = Consumo::find($id);

        if(!$consumo){
            return response()->json(['erro'=> 'Consumo nao encontrado'], 404);
        }
        $consumo->delete();

        return response()->json(['sucesso'=> 'Consumo excluido com sucesso'], 200);
    
    }
}