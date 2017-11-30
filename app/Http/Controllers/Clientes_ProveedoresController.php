<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes_proveedores;

class Clientes_ProveedoresController extends Controller
{
    
    public function index()
    {
        $registro= clientes_proveedores::with(['clientes', 'proveedores'])->get();
        return view('clientes_proveedores.index', compact('registro'));
        
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
