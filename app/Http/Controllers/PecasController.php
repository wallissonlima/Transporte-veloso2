<?php

namespace App\Http\Controllers;

use App\Models\Entity\Pecas;
use Illuminate\Http\Request;

class PecasController extends Controller
{
    
    public function index()
    {
        $pecas = Pecas::all();
        return response()->json($pecas);
    }

  
    public function create(Request $request)
    {
        $pecas = New Pecas();

        $pecas->fill($request->all());

        $pecas->save();

        return response()->json($pecas, 201);
    }

    
    public function show($id)
    {
        $pecas = Pecas::find($id);

        if(!$pecas){
            return response()->json(['erro'=> 'Pecas nao encontrado', 404]);
        }

        return response()->json($pecas);
    }

   
    public function update($id, Request $request)
    {
        $pecas = Pecas::find($id);

        if(!$pecas){
            return response()->json(['erro'=> 'Pecas nao encontrado'], 404);

        }

        $pecas->fill($request->all());

        $pecas->update();

        return response()->json($pecas, 200);
    }

  
    public function destroy($id)
    {
        $pecas = Pecas::find($id);

        if(!$pecas){
            return response()->json(['erro'=> 'Pecas nao encontrado'], 404);
        }
        $pecas->delete();

        return response()->json(['sucesso'=> 'Pecas excluido com sucesso'], 200);
    
    }
}