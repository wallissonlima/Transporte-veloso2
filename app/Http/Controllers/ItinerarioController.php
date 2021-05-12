<?php

namespace App\Http\Controllers;

use App\Models\Entity\Itinerario;
use Illuminate\Http\Request;

class ItinerarioController extends Controller
{
   
    public function index()
    {
        $itinerario = Itinerario::all();
        return response()->json($itinerario);
    }

  
    public function create(Request $request)
    {
        $itinerario = New Itinerario();

        $itinerario->fill($request->all());

        $itinerario->save();

        return response()->json($itinerario, 201);
    }

    
    public function show($id)
    {
        $itinerario = Itinerario::find($id);

        if(!$itinerario){
            return response()->json(['erro'=> 'Itinerario nao encontrado', 404]);
        }

        return response()->json($itinerario);
    }

   
    public function update($id, Request $request)
    {
        $itinerario = Itinerario::find($id);

        if(!$itinerario){
            return response()->json(['erro'=> 'Itinerario nao encontrado'], 404);

        }

        $itinerario->fill($request->all());

        $itinerario->update();

        return response()->json($itinerario, 200);
    }

  
    public function destroy($id)
    {
        $itinerario = Itinerario::find($id);

        if(!$itinerario){
            return response()->json(['erro'=> 'Itinerario nao encontrado'], 404);
        }
        $itinerario->delete();

        return response()->json(['sucesso'=> 'Itinerario excluido com sucesso'], 200);
    
    }
}