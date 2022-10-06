<?php

namespace App\Http\Controllers;

use App\Area;
use App\Asesor;
use App\Asignacion;
use App\Cliente;
use App\Persona;
use App\Supervisor;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function nuevos()
    {
        $clientes = Cliente::where('estado','NUEVO')->orderBy('created_at' ,'desc')->get();
        return view('administracion.clientes.nuevos',compact('clientes'));
    }

    public function asignados()
    {
        $asignaciones = Asignacion::join('clientes as cl','asignaciones.cliente_id','cl.id')
        ->join('supervisores as sup','sup.id','asignaciones.supervisor_id')
        ->join('areas as a','a.id','asignaciones.area_id')
        ->where([
            ['asignaciones.activo', true]
        ])
        ->select('asignaciones.*','cl.nombres as cliente','cl.id as cliente_id','sup.id as supervisor_id','sup.nombres as supervisor_nombre','sup.apellidos as supervisor_apellidos', 'a.nombre as area','cl.departamento','cl.provincia','cl.distrito','cl.numero')
        ->get();
        return view('administracion.clientes.asignados',compact('asignaciones'));
    }

    public function asignar(Request $request, $id)
    {
        $error = false;
        $message = "";
        $collection = collect([]);

        $supervisor = Supervisor::findOrFail($request->supervisor);
        $cliente = Cliente::findOrFail($id);

        if ($supervisor && $cliente) {
            $asignacion = new Asignacion();
            $asignacion->cliente_id = $cliente->id;
            $asignacion->supervisor_id = $supervisor->id;
            $asignacion->area_id = $supervisor->area_id;
            $asignacion->estado = 'ASIGNADO';   
            $asignacion->created_by = usuario()->id;
            $asignacion->save();

            $cliente->estado = 'ASIGNADO';
            $cliente->save();

            $message = "Se asignó al supervisor correctamente";
        } else {
            $error = true;
            $message = "No se pudo realizar la asignación, intentelo nuevamente";
        }
        
        if (!$error) {
            $collection->push($asignacion);
        }
        
        $response = [
            'error' => $error,
            'message' => $message,
            'datos' => $collection
        ];

        return response()->json($response);
    }

    public function actualizar_estado(Request $request, $idAsignacion)
    {
        $error = false;
        $message = "";
        $collection = collect([]);

        $asignacion = Asignacion::findOrFail($idAsignacion);

        if ($asignacion) {
            $nuevo_estado = $request->estado;
            if ($nuevo_estado == 'REASIGNADO') {
                $supervisor = Supervisor::findOrFail($request->reasignado);

                $reasignacion = new Asignacion();
                $reasignacion->cliente_id = $asignacion->cliente_id;
                $reasignacion->supervisor_id = $supervisor->id;
                $reasignacion->area_id = $supervisor->area_id;
                $reasignacion->estado = 'ASIGNADO';
                $reasignacion->created_by = usuario()->id;
                $reasignacion->save();
            }             
            $asignacion->estado = $nuevo_estado;
            $asignacion->updated_by = usuario()->id;
            $asignacion->save();

            $message = "Se actualizó el estado de la asignación correctamente";
        } else {
            $error = true;
            $message = "No se pudo realizar la actualización del estado, intentelo nuevamente";
        }
        
        if (!$error) {
            $collection->push($asignacion);
        }
        
        $response = [
            'error' => $error,
            'message' => $message,
            'datos' => $collection
        ];

        return response()->json($response);
    }

}
