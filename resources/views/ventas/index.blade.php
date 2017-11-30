@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <H3>LISTADO DE VENTAS</H3>
                </div>
                <br>
                <div><a href="{{ route('ventas.create') }}" class="btn btn-primary">Agregar Venta </a>
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
                            <th>Usuario</th>
                            <th>Total</th>
                            <th># de Venta</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach ($registro as $dato)
                            <tr>
                                <td>{{$loop->iteration}}</td>                                
                                <td>{{$dato->cliente->nombre}}</td>   
                                <td>{{$dato->usuario->name}}</td>                                         
                                <td>{{$dato->total}}</td>
                                <td align="center">{{$dato->id}}</td>
                                <td>
                                    @if($dato->estado == 1)
                                    Anulado
                                    @else
                                    Activo
                                    @endif
                                </td>
                                    <td>                                                                   
                                       <a href="{{ route('ventas.show', $dato->id) }}" class="btn btn-info">Mostrar Detalles
                                        </a>                                        
                                        <td>
                                            @if($dato->estado == 0)
                                            <a href="{{ route('ventas.edit', $dato->id) }}" class="btn btn-danger">
                                                Anular 
                                            </a>

                                    
                                    @else
                                                                
                                    @endif
                                        </td>
                                </td>@endforeach 
                            </tr>
                           
                            
                        </tbody>
                    </table>
                <H5>FIN DE REGISTROS</H5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection