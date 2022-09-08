<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Distrito;
use App\Persona;
use App\Provincia;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class FormularioController extends Controller
{
    public function create()
    {
        //
    }

    public function store(Request $request, $area)
    {
        $error = false;
        $message = "";
        $collection = collect([]);

        // Obtenemos datos previos
        $departamento = Region::where('regi_ID',$request->region)->first();
        $provincia = Provincia::where('prov_ID',$request->provincia)->first();
        $distrito = Distrito::where('dist_ID',$request->distrito)->first();

        $cliente = new Cliente();
        $cliente->tipo_documento = $request->tipo_documento;
        if($request->tipo_documento == "DNI") $cliente->documento = setCadena($request->dni);
        if($request->tipo_documento == "RUC") $cliente->documento = setCadena($request->ruc);
        if($request->tipo_documento == "CARNE") $cliente->documento = setCadena($request->carnet);
        $cliente->nombres = setCadena($request->nombre);
        $cliente->area = setCadena($area);
        $cliente->departamento = ($departamento) ? setCadena($departamento->regi_nombre) : '';
        $cliente->provincia = ($provincia) ? setCadena($provincia->prov_nombre) : '';
        $cliente->distrito = ($distrito) ? setCadena($distrito->dist_nombre) :  '';
        $cliente->numero = setCadena($request->numero);
        $cliente->save();

        if ($cliente) {
            $collection->push($cliente);
            $message = "Se registró correctamente, nos comunicaremos con usted.";
        }else {
            $error = true;
            $message = "No se pudo registrar, porfavor vueva a intentarlo";
        }

        $response = [
            'error' => $error,
            'message' => $message,
            'datos' => $collection
        ];

        return response()->json($response);
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
