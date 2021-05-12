<?php

namespace App\Http\Controllers;

use App\Models\Entity\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
   
    public function index()
    {
        $usuario = Usuario::all();
        return response()->json($usuario);
    }

  
    public function create(Request $request)
    {
        $usuario = New Usuario();

        $usuario->fill($request->all());

        $usuario->save();

        return response()->json($usuario, 201);
    }

    
    public function show($id)
    {
        $usuario = Usuario::find($id);

        if(!$usuario){
            return response()->json(['erro'=> 'Usuario nao encontrado', 404]);
        }

        return response()->json($usuario);
    }

   
    public function update($id, Request $request)
    {
        $usuario = Usuario::find($id);

        if(!$usuario){
            return response()->json(['erro'=> 'Usuario nao encontrado'], 404);

        }

        $usuario->fill($request->all());

        $usuario->update();

        return response()->json($usuario, 200);
    }

  
    public function destroy($id)
    {
        $usuario = Usuario::find($id);

        if(!$usuario){
            return response()->json(['erro'=> 'Usuario nao encontrado'], 404);
        }
        $usuario->delete();

        return response()->json(['sucesso'=> 'Usuario excluido com sucesso'], 200);
    
    }
}