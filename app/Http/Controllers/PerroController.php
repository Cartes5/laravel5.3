<?php

namespace App\Http\Controllers;

use App\Perros;
use Illuminate\Http\Request;

class PerroController extends Controller
{
    public function index()
    {
        $perros = Perros::all(['id','nombre','raza','tamaño','color']);
        return response()->json($perros);
    }
    public function store(Request $request)
    {
        $perros = Perros::create($request->post());
        return response()->json([
            'message'=>'Perro Creado correctamente',
            'perros'=>$perros
        ]);
    }
    public function show(Perros $perros)
    {
        return response()->json($perros);
    }
    public function update(Request $request, Perros $perros)
    {
        $perros->fill($request->post())->save();
        return response()->json([
            'message'=>'Perro actualizado correctamente',
            'perros'=>$perros
        ]);
    }
    public function destroy(Perros $perros)
    {
        $perros->delete();
        return response()->json([
            'message'=>'Perro borrado correctamente'
        ]);
    }
}
