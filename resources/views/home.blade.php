@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <a href="{{ route('clientes') }}">Clientes</a>
                <a href="{{ route('clientes') }}">Proveedores</a>
                <a href="{{ route('clientes') }}">Productos</a>
                <a href="{{ route('clientes') }}">Ventas</a>
                <a href="{{ route('clientes') }}">Usuarios</a>

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
