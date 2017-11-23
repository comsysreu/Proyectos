@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <a href="{{ route('clientes') }}">Clientes</a>
                <a href="{{ route('proveedores') }}">Proveedores</a>
                <a href="{{ route('productos') }}">Productos</a>
                <a href="{{ route('ventas') }}">Ventas</a>
                <a href="{{ route('usuarios') }}">Usuarios</a>

                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <H1>CLIENTES</H1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection