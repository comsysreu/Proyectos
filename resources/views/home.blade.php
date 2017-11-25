@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <a href="{{ route('clientes.index') }}">Clientes</a>
                <a href="">Proveedores</a>
                <a href="">Productos</a>
                <a href="">Ventas</a>
                <a href="">Usuarios</a>

                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    BIENVENIDO AL SISTEMA
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
