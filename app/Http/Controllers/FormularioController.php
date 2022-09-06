<?php

namespace App\Http\Controllers;

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

    public function store(Request $request, $tipo)
    {
        $error = false;
        $message = "";
        $collection = collect([]);

        // Obtenemos datos previos
        $departamento = Region::where('regi_ID',$request->region)->first();
        $provincia = Provincia::where('prov_ID',$request->provincia)->first();
        $distrito = Distrito::where('dist_ID',$request->distrito)->first();

        $persona = new Persona();
        $persona->tipo_documento = $request->tipo_documento;
        if($request->tipo_documento == "DNI") $persona->documento = setCadena($request->dni);
        if($request->tipo_documento == "RUC") $persona->documento = setCadena($request->ruc);
        if($request->tipo_documento == "CARNE") $persona->documento = setCadena($request->carnet);
        $persona->nombre = setCadena($request->nombre);
        $persona->departamento = ($departamento) ? setCadena($departamento->regi_nombre) : '';
        $persona->provincia = ($provincia) ? setCadena($provincia->prov_nombre) : '';
        $persona->distrito = ($distrito) ? setCadena($distrito->dist_nombre) :  '';
        $persona->numero = setCadena($request->numero);
        $persona->save();

        if ($persona) {
            $collection->push($persona);
            $message = "Se registró correctamente, nos comunicaremos con usted.";
        }else {
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
