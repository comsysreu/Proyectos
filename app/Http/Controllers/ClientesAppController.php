<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes_model;

class ClientesAppController extends Controller
{

    	protected $result = false;
    	protected $message = 'Ocurrio un problema al procesar la solicitud';
    	//protected $record = array();
    	protected $records = null;
    	protected $status_code = 200;

    

    public function mostrar()
    {
        try {
            $records = clientes_model::all();

            if(count($records) > 0 ) {
                $this->status_code = 200;
                $this->result = true;
                $this->message = 'Registros encontrados';
                $this->records = $records;
            }
            else
                throw new Exception("No existen registros");

        } catch (Exception $e) {

            $this->status_code  = 200;
            $this->result       = false;
            $this->message      = env('APP_DEBUG') ? $e->getMessage() : $this->message;

        } finally {
            $response = [
                'result'    =>  $this->result,
                'message'   =>  $this->message,
                'records'   =>  $this->records
            ];
            return response()->json($response, $this->status_code);
        }
    }

    
    public function guardar(Request $request)
    {
        try {        

            $new_record = clientes_model::create([ 'datos' => $request->input('datos'),
                                            'nombre'  =>  $request->input('nombre'),
                                            'direccion' =>  $request->input('direccion'),
                                            'fecha_nacimiento'  =>  $request->input('fecha_nacimiento'),
                                            'sexo'  =>  $request->input('sexo'),
                                            'nit' =>  $request->input('nit'),
                                            'telefono' =>  $request->input('telefono'),
                                          ]);

            if ($new_record) {
                $this->status_code  =   200;
                $this->result       =   true;
                $this->message      =   'El registro se agrego exitosamente';
                $this->records      =   $new_record;
            }
            else
                throw new Exception('Registro no almacenado');

        } catch (Exception $e) {
        
            $this->status_code  = 200;
            $this->result       = false;
            $this->message      = env('APP_DEBUG') ? $e->getMessage() : $this->message;

        } finally {
            $response = [
                'result'    =>  $this->result,
                'message'   =>  $this->message,
                'records'   =>  $this->records
            ];

            return response()->json($response, $this->status_code);
        }
    }

   
    public function mostrar_uno($id)
    {
        try{

            $this->records = clientes_model::find($id);
            $this->message = 'Registro Encontrado';
            $this->result  = true;
        

        } catch (Exception $e) {
            $this->result       = false;
            $this->message      = $e->getMessage();

        } finally {
            $response = [
                
                'message'   =>  $this->message,
                'result'    =>  $this->result,
                'records'   =>  $this->records
            ];

            return response()->json($response, $this->status_code);
        }
    }

    public function actualizar(Request $request, $id)
    {
        try {

           

            $record = clientes_model::find($id);

            if ( $record ) {

                $record->nombre = $request->input('nombre', $record->nombre);
                $record->direccion = $request->input('direccion', $record->direccion);
                $record->fecha_nacimiento = $request->input('fecha_nacimiento', $record->fecha_nacimiento);
                $record->sexo = $request->input('sexo', $record->sexo);
                $record->nit = $request->input('nit', $record->nit);
                $record->telefono = $request->input('telefono', $record->telefono);

                if ($record->save()) {
                    $this->status_code = 200;
                    $this->result = true;
                    $this->message = 'Datos actualizados ';
                    $this->records = $record;
                }
                else
                    throw new Exception('Error al actualizar');
            }
            else
                throw new Exception('Registro no existente');

        } catch (Exception $e) {
           
            $this->status_code  = 200;
            $this->result       = false;
            $this->message      = env('APP_DEBUG') ? $e->getMessage() : $this->message;

        } finally {
            $response = [
                'result'    =>  $this->result,
                'message'   =>  $this->message,
                'records'   =>  $this->records
            ];

            return response()->json($response, $this->status_code);
        }
    }

    
    public function eliminar($id)
    {
        try {


            $record = clientes_model::find($id);

            if ( $record ) {

                if ($record->delete()) {

                    $this->status_code = 200;
                    $this->result = true;
                    $this->message = 'Registro eliminado';
                    $this->records = $record;

                }
                else
                    throw new Exception('Error al eliminar los datos');
            }
            else
                throw new Exception('Registro no existente');

        } catch (Exception $e) {
            
            $this->status_code  = 200;
            $this->result       = false;
            $this->message      = env('APP_DEBUG') ? $e->getMessage() : $this->message;

        } finally {
            $response = [
                'result'    =>  $this->result,
                'message'   =>  $this->message,
                'records'   =>  $this->records
            ];

            return response()->json($response, $this->status_code);
        }
    }
}
