<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Persona;
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
