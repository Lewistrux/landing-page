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

    // function dtCompetencias($id) {
    //     $clientes = Cliente::where([
    //         ['estado', 'NUEVO'],
    //         ['activo', true]
    //     ])->get();
         
    //     return Datatables()->of($clientes)
    //         ->editColumn('nombres', function(Cliente $cliente){
    //             return  $cliente->nombres;
    //         })
    //          ->editColumn('area', function(Cliente $cliente){
    //              return $cliente->area;
    //          })
    //          ->addColumn('opciones', function(Cliente $cliente){
    //              if ($cliente->activo) {
    //                  $buttons = '<button class="btn btn-sm btn-warning" data-id="'.$cliente->id.'" data-nombre="'.$cliente->nombres.'"
    //                  data-area="'.$cliente->area.'" data-numero="'.$cliente->numero.'" title="Asignar" data-toggle="modal" 
    //                  data-target="#modal-asignar">
    //                  <i class="fas fa-clipboard-check" ></i> Asignar
    //                  </button>';
    //              } else {
    //                 $buttons = '-';
    //              }
    //                 return $buttons;
    //          })
    //          ->rawColumns(['opciones'])
    //          ->toJson();
    // }

    public function asignados()
    {
        $clientes = Cliente::where('estado','<>','NUEVO')->get();
        return view('administracion.clientes.asignados',compact('clientes'));
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

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
