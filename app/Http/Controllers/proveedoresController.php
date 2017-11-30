<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedores_model;


class proveedoresController extends Controller
{
    
    public function index()
    {
        $registro = proveedores_model::all();
        return view('proveedores.index', compact('registro'));
    }

        public function create()
    {
        return view('proveedores.crear');

    }


    public function store(Request $request)
    {
        proveedores_model::create(
            [
                "nombre" => $request->input('nombre'),
                "direccion" => $request->input('direccion'),
                "nit" => $request->input('nit'),
                "telefono" => $request->input('telefono'),
                
            ]
        );
                return redirect()->route('proveedores.index');
    }

        public function show($id)
    {
        $registro = proveedores_model::find($id);
        return view ('proveedores.eliminar', compact('registro'));
    }

    
    public function edit($id)
    {
        $registro = proveedores_model::find($id);

        return view ('proveedores.editar', compact('registro'));
    }

    public function update(Request $request, $id)
    {
            $registro = proveedores_model::find($id);
            
                 $registro->nombre  = $request->input('nombre', $registro->nombre);
                 $registro->direccion  = $request->input('direccion', $registro->direccion);
                 $registro->nit     = $request->input('nit', $registro->nit);
                 $registro->telefono     = $request->input('telefono', $registro->telefono);
                 $registro->save();     

                return redirect()->route('proveedores.index');

    }

   
    public function destroy($id)
    {
            $registro = proveedores_model::find($id);
            $registro->delete();
            return redirect()->route('proveedores.index');
    }
}
