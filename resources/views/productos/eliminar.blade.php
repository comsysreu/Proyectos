@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ELIMINAR REGISTRO</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('productos.destroy', $registro->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $registro->nombre }}" required autofocus readonly="readonly">
                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">
                            <label for="codigo" class="col-md-4 control-label">Codigo</label>

                            <div class="col-md-6">
                                <input id="codigo" type="text" class="form-control" name="codigo" value="{{ $registro->codigo }}" required autofocus readonly="readonly">
                                @if ($errors->has('codigo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codigo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('SKU') ? ' has-error' : '' }}">
                            <label for="SKU" class="col-md-4 control-label">SKU</label>

                            <div class="col-md-6">
                                <input id="SKU" type="text" class="form-control" name="SKU" value="{{ $registro->SKU }}" required autofocus readonly="readonly">

                                @if ($errors->has('SKU'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('SKU') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-danger">
                                    ELIMINAR
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection