<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes_model;
use DB;



class clientesController extends Controller
{

    protected $result = false;
    protected $message = 'Ocurrio un problema al procesar la solicitud';
    protected $record = array();
    //protected $record = null;
    protected $status_code = 400;
    
    public function index()
    {
        $clientes = clientes_model::all();
        return view('clientes.index', compact('clientes'));
    }

    
    public function create()
    {
        return view('clientes.crear');
    }

    public function store(Request $request)
    {
        clientes_model::create(
            [
                "nombre" => $request->input('nombre'),
                "direccion" => $request->input('direccion'),
                "fecha_nacimiento" => $request->input('fecha_nacimiento'),
                "sexo" => $request->input('sexo'),
                "nit" => $request->input('nit'),
                "telefono" => $request->input('telefono'),
            ]
        );
                return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = clientes_model::find($id);
        return view ('clientes.eliminar', compact('cliente'));
    }

    
    public function edit($id)
    {
        $cliente = clientes_model::find($id);

        return view ('clientes.editar', compact('cliente'));
    }

    
    public function update(Request $request, $id)
    {
           $cliente = clientes_model::find($id);
            
                 $cliente->nombre             = $request->input('nombre', $cliente->nombre);
                 $cliente->direccion          = $request->input('direccion', $cliente->direccion);
                 $cliente->fecha_nacimiento   = $request->input('fecha_nacimiento', $cliente->fecha_nacimiento);
                 $cliente->sexo               = $request->input('sexo', $cliente->sexo);
                 $cliente->nit                = $request->input('nit', $cliente->nit);
                 $cliente->telefono           = $request->input('telefono', $cliente->telefono);
                 $cliente->save();     

                return redirect()->route('clientes.index');
    }

    
    public function destroy($id)
    {

            $cliente = clientes_model::find($id);
            $cliente->delete();
            return redirect()->route('clientes.index');
    }
}
