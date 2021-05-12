<?php

namespace App\Http\Controllers;

use App\Models\Entity\Contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
   
    public function index()
    {
        $contrato = Contrato::all();
        return response()->json($contrato);
    }

  
    public function create(Request $request)
    {
        $contrato = New Contrato();

        $contrato->fill($request->all());

        $contrato->save();

        return response()->json($contrato, 201);
    }

    
    public function show($id)
    {
        $contrato = Contrato::find($id);

        if(!$contrato){
            return response()->json(['erro'=> 'Contrato nao encontrado', 404]);
        }

        return response()->json($contrato);
    }

   
    public function update($id, Request $request)
    {
        $contrato = Contrato::find($id);

        if(!$contrato){
            return response()->json(['erro'=> 'Contrato nao encontrado'], 404);

        }

        $contrato->fill($request->all());

        $contrato->update();

        return response()->json($contrato, 200);
    }

  
    public function destroy($id)
    {
        $contrato = Contrato::find($id);

        if(!$contrato){
            return response()->json(['erro'=> 'Contrato nao encontrado'], 404);
        }
        $contrato->delete();

        return response()->json(['sucesso'=> 'Contrato excluido com sucesso'], 200);
    
    }
}