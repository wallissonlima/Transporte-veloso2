<?php

namespace App\Http\Controllers;

use App\Models\Entity\Viagem;
use Illuminate\Http\Request;

class ViagemController extends Controller
{
    
    public function index()
    {
        $viagem = Viagem::all();
        return response()->json($viagem);
    }

  
    public function create(Request $request)
    {
        $viagem = New Viagem();

        $viagem->fill($request->all());

        $viagem->save();

        return response()->json($viagem, 201);
    }

    
    public function show($id)
    {
        $viagem = Viagem::find($id);

        if(!$viagem){
            return response()->json(['erro'=> 'viagem nao encontrado', 404]);
        }

        return response()->json($viagem);
    }

   
    public function update($id, Request $request)
    {
        $viagem = Viagem::find($id);

        if(!$viagem){
            return response()->json(['erro'=> 'Viagem nao encontrado'], 404);

        }

        $viagem->fill($request->all());

        $viagem->update();

        return response()->json($viagem, 200);
    }

  
    public function destroy($id)
    {
        $viagem = Viagem::find($id);

        if(!$viagem){
            return response()->json(['erro'=> 'Viagem nao encontrado'], 404);
        }
        $viagem->delete();

        return response()->json(['sucesso'=> 'Viagem excluido com sucesso'], 200);
    
    }
}