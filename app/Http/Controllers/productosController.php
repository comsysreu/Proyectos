<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;


class productosController extends Controller
{
    
    public function index()
    {
        $registro = productos::all();
        return view('productos.index', compact('registro'));
    }

        public function create()
    {
        return view('productos.crear');

    }


    public function store(Request $request)
    {
        productos::create(
            [
                "nombre" => $request->input('nombre'),
                "codigo" => $request->input('codigo'),
                "SKU" => $request->input('SKU'),
                
            ]
        );
                return redirect()->route('productos.index');
    }

        public function show($id)
    {
        $registro = productos::find($id);
        return view ('productos.eliminar', compact('registro'));
    }

    
    public function edit($id)
    {
        $registro = productos::find($id);

        return view ('productos.editar', compact('registro'));
    }

    public function update(Request $request, $id)
    {
            $registro = productos::find($id);
            
                 $registro->nombre  = $request->input('nombre', $registro->nombre);
                 $registro->codigo  = $request->input('codigo', $registro->codigo);
                 $registro->SKU     = $request->input('SKU', $registro->SKU);
                 $registro->save();     

                return redirect()->route('productos.index');

    }

   
    public function destroy($id)
    {
            $registro = productos::find($id);
            $registro->delete();
            return redirect()->route('productos.index');
    }
}
