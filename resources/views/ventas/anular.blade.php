@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">DETALLES DEL  REGISTRO  
                        <a  href="{{ route('ventas.index') }}" class="btn btn-primary" align="right">Regresar 
                        </a>

                       <!--  <a  href="{{ route('ventas.update', $registro->id) }}" class="btn btn-danger" align="right">Anular Venta
                        </a> -->
                </div> 
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('ventas.update', $registro->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Cliente</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $registro->cliente->nombre}}" required autofocus readonly="readonly">
                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">Empleado</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ $registro->usuario->name }}" required autofocus readonly="readonly">
                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
                            <label for="nit" class="col-md-4 control-label"># de Factura</label>

                            <div class="col-md-6">
                                <input id="nit" type="text" class="form-control" name="nit" value="{{ $registro->id }}" required autofocus readonly="readonly">
                                @if ($errors->has('nit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">Total</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ $registro->total }}" required autofocus readonly="readonly">
                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                
                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">Fecha de Facturación</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ $registro->created_at }}" required autofocus readonly="readonly">
                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                            <label for="estado" class="col-md-4 control-label">Estado de Facturación</label>

                            <div class="col-md-6">
                                <td>
                                    @if($registro->estado == 1)
                                    <h4>Anulada </h4>
                                    @else
                                    <h4> Activa </h4>
                                    @endif
                                </td>
                                <!-- <input id="estado" type="text" class="form-control" name="estado" value="$estado" required autofocus readonly="readonly">
 -->
                                @if ($errors->has('estado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-danger" pull-right>
                                <!-- btn-success -->
                                    Anular Venta
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-body">DETALLES DE VENTA  
                     <table width="100%">
                        
                        <thead>                            
                            <th>Producto</th>
                            <th>Cantidad</th>  
                            <th>Subtotal</th>                            
                        </thead>
                        <tbody>  
                            @if(count($registro->detalle) > 0)
                                 @for ($i = 0; $i < count($registro->detalle); $i++)
                            <tr>  
                                <td>{{$registro->detalle[$i]->producto->nombre}}</td>
                                <td>{{$registro->detalle[$i]->cantidad}} </td>
                                <td>{{$registro->detalle[$i]->subtotal}} </td>
                             </tr>
                                @endfor
                                @else

                                <p>No posee detalle de factura</p>
                                @endif
                            
                         </tbody>
                    </table>
                </div> 
                                    
            </div>
        </div>
    </div>
</div>
@endsection