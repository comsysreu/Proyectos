@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <H3>LISTADO DE USUARIOS</H3>
                </div>
                <br>
                <div><a href="{{ url('/register') }}" class="btn btn-primary">Agregar Registro </a>
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
                            <th>Email</th>
                            <th>Sexo</th>
                        </thead>
                        <tbody>
                            @foreach ($registro as $dato)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dato->name}}</td>
                                <td>{{$dato->email}}</td>
                                <td>
                                    @if($dato->sexo == 1)
                                    Mujer
                                    @else
                                    Hombre
                                    @endif
                                </td>
                                    <td>
                                        <a href="{{ route('usuarios.edit', $dato->id) }}" class="btn btn-primary">        Editar
                                        </a>
                                </td>
                                <td>
                                       <a href="{{ route('usuarios.show', $dato->id) }}" class="btn btn-danger">        Eliminar
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