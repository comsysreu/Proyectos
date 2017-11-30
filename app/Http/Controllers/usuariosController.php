<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class usuariosController extends Controller
{
    
    public function index()
    {
        $registro = User::all();
        return view('usuarios.index', compact('registro'));
    }

        public function create()
    {
        return view('usuarios.crear');

    }


    public function store(Request $request)
    {
        User::create(
            [
                "nombre" => $request->input('nombre'),
                "codigo" => $request->input('codigo'),
                "SKU" => $request->input('SKU'),
                
            ]
        );
                return redirect()->route('usuarios.index');
    }

        public function show($id)
    {
        $registro = User::find($id);
        return view ('usuarios.eliminar', compact('registro'));
    }

    
    public function edit($id)
    {
        $registro = User::find($id);

        return view ('usuarios.editar', compact('registro'));
    }

    public function update(Request $request, $id)
    {
            $registro = User::find($id);
            
                 $registro->nombre  = $request->input('nombre', $registro->nombre);
                 $registro->codigo  = $request->input('codigo', $registro->codigo);
                 $registro->SKU     = $request->input('SKU', $registro->SKU);
                 $registro->save();     

                return redirect()->route('usuarios.index');

    }

   
    public function destroy($id)
    {
            $registro = User::find($id);
            $registro->delete();
            return redirect()->route('usuarios.index');
    }
}
