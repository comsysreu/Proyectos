<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ventas;


class ventasController extends Controller
{
    
    public function index()
    {
        //$registro = ventas::all();
        // $registro= ventas::with('cliente')->with('usuario')->with('detalle')->get();
        $registro= ventas::with(['cliente', 'usuario'])->get();
        return view('ventas.index', compact('registro'));
        
    }


        public function create()
    {
        return view('ventas.crear');

    }


    public function store(Request $request)
    {
        ventas::create(
            [
                "nombre" => $request->input('nombre'),
                "codigo" => $request->input('codigo'),
                "SKU" => $request->input('SKU'),
                
            ]
        );
                return redirect()->route('ventas.index');
    }

        public function show($id)
    {
        $registro = ventas::find($id);
        //dd($registro->detalle);
        return view ('ventas.mostrar', compact('registro'));

    }

       
    public function edit($id)
    {
        $registro = ventas::find($id);
        return view ('ventas.anular', compact('registro'));
    }

    public function update(Request $request, $id)
    {
            $estado = 1;
            $registro = ventas::find($id);
                 $registro->estado  = $estado;
                 $registro->save();     
                return redirect()->route('ventas.index');

    }

   
    public function destroy($id)
    {
            $registro = ventas::find($id);
            $registro->delete();
            return redirect()->route('ventas.index');
    }
}
