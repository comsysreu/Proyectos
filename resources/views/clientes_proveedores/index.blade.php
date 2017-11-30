@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <H3>LISTADO DE CLIENTES-PROVEEDORES</H3>
                </div>
                <br>
                <div><a href="{{ route('productos.create') }}" class="btn btn-primary">Agregar Registro </a>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table width="100%">
                        
                        <thead>
                            <th>#</th>
                            <th>Cliente</th>
                            <th># Cliente</th>
                            <th>Proveedor</th>
                            <th># Proveedor</th>                            
                        </thead>
                        <tbody>
                            @foreach ($registro as $dato)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dato->clientes->nombre}}</td>  
                                <td>{{$dato->clientes->telefono}}</td>  
                                <td>{{$dato->proveedores->nombre}}</td>  
                                <td>{{$dato->proveedores->telefono}}</td>   
                                
                                    <td>
                                        <a href="{{ route('productos.edit', $dato->id) }}" class="btn btn-primary">        Editar
                                        </a>
                                </td>
                                <td>
                                       <a href="{{ route('productos.show', $dato->id) }}" class="btn btn-danger">        Eliminar
                                        </a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                <H5>FIN DE REGISTROS</H5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection