@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <H3>LISTADO DE PROVEEDORES</H3>
                </div>
                <br>
                <div><a href="{{ route('proveedores.create') }}" class="btn btn-primary">Agregar Registro </a>
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
                            <th>Nombre</th>
                            <th>NIT</th>
                            <th>Télefono</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach ($registro as $dato)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dato->nombre}}</td>
                                <td>{{$dato->nit}}</td>
                                <td>{{$dato->telefono}}</td>
                                    <td>
                                        <a href="{{ route('proveedores.edit', $dato->id) }}" class="btn btn-primary">        Editar
                                        </a>
                               
                                       <a href="{{ route('proveedores.show', $dato->id) }}" class="btn btn-danger">        Eliminar
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