<?php

namespace App\Http\Controllers;

use App\Models\Entity\Mao_De_Obra;
use Illuminate\Http\Request;

class Mao_De_ObraController extends Controller
{
    
    public function index()
    {
        $mao_de_obra = Mao_De_Obra::all();
        return response()->json($mao_de_obra);
    }

  
    public function create(Request $request)
    {
        $mao_de_obra = New Mao_De_Obra();

        $mao_de_obra->fill($request->all());

        $mao_de_obra->save();

        return response()->json($mao_de_obra, 201);
    }

    
    public function show($id)
    {
        $mao_de_obra = Mao_De_Obra::find($id);

        if(!$mao_de_obra){
            return response()->json(['erro'=> 'Mao De Obra nao encontrado', 404]);
        }

        return response()->json($mao_de_obra);
    }

   
    public function update($id, Request $request)
    {
        $mao_de_obra = Mao_De_Obra::find($id);

        if(!$mao_de_obra){
            return response()->json(['erro'=> 'Mao De Obra nao encontrado'], 404);

        }

        $mao_de_obra->fill($request->all());

        $mao_de_obra->update();

        return response()->json($mao_de_obra, 200);
    }

  
    public function destroy($id)
    {
        $mao_de_obra = Mao_De_Obra::find($id);

        if(!$mao_de_obra){
            return response()->json(['erro'=> 'Mao De Obra nao encontrado'], 404);
        }
        $mao_de_obra->delete();

        return response()->json(['sucesso'=> 'Mao De Obra excluido com sucesso'], 200);
    
    }
}