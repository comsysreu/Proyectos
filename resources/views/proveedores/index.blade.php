@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <H3>LISTADO DE CLIENTES</H3>
                </div>
                <br>
                <div><a href="{{ route('clientes.create') }}" class="btn btn-primary">Agregar Registro </a>
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
                            <th>F. Nacimiento</th>
                            <th>NIT</th>
                            <th>Sexo</th>
                            <th>Telefono</th>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $dato)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dato->nombre}}</td>
                                <td>{{$dato->fecha_nacimiento       }}</td>
                                <td>{{$dato->nit}}</td>
                                <td>
                                    @if($dato->sexo == 1)
                                    Mujer
                                    @else
                                    Hombre
                                    @endif
                                </td>
                                <td>{{$dato->telefono}}</td>
                                    <td>
                                        <a href="{{ route('clientes.edit', $dato->id) }}" class="btn btn-primary">        Editar
                                        </a>
                                </td>
                                <td>
                                       <a href="{{ route('clientes.show', $dato->id) }}" class="btn btn-danger">        Eliminar
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