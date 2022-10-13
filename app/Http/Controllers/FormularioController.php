<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Distrito;
use App\Persona;
use App\Postulante;
use App\Provincia;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FormularioController extends Controller
{
    public function store(Request $request, $area)
    {
        $error = false;
        $message = "";
        $collection = collect([]);

        // Obtenemos datos previos
        // $departamento = Region::where('regi_ID',$request->region)->first();
        // $provincia = Provincia::where('prov_ID',$request->provincia)->first();
        // $distrito = Distrito::where('dist_ID',$request->distrito)->first();
        $localidad = Distrito::join('provincia as pro','pro.prov_ID','distrito.dist_provinciaID')
        ->join('region as reg','reg.regi_ID','pro.prov_regionID')
        ->where('distrito.dist_ID',$request->localidad)
        ->select('distrito.*','reg.regi_nombre','pro.prov_nombre')->first();

        $cliente = new Cliente();
        if ($area == "CORP-FIJA" || $area == "CORP-MOVIL" || $area == "CORP-SOLUCIONES" ) {
            $cliente->tipo_documento = 'RUC';
            $cliente->documento = setCadena($request->ruc);
        } else {
            $cliente->tipo_documento = $request->tipo_documento;
            if($request->tipo_documento == "DNI") $cliente->documento = setCadena($request->dni);
            if($request->tipo_documento == "RUC") $cliente->documento = setCadena($request->ruc);
            if($request->tipo_documento == "CARNE") $cliente->documento = setCadena($request->carnet);
        }
        $cliente->nombres = setCadena($request->nombre);
        $cliente->area = setCadena($area);
        $cliente->departamento = ($localidad) ? setCadena($localidad->regi_nombre) : '';
        $cliente->provincia = ($localidad) ? setCadena($localidad->prov_nombre) : '';
        $cliente->distrito = ($localidad) ? setCadena($localidad->dist_nombre) :  '';
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

    public function postular(Request $request)
    {
        $error = false;
        $message = "";
        $collection = collect([]);

        if($request->hasFile('archivo_cv')){
            $file = $request->file('archivo_cv');
            $name = $file->getClientOriginalName();
            $extension = $request->file('archivo_cv')->extension();
            if($extension == "pdf"){
                $postulante = new Postulante();
                $postulante->nombres = setCadena($request->nombre);
                $postulante->puesto = setCadena($request->puesto);
                $postulante->numero = setCadena($request->numero);
                $postulante->nombre_archivo = $name;
                $postulante->ruta = $request->file('archivo_cv')->store('public/postulantes/cv');
                $postulante->save();
            }   
            else $error = true;              
        }else $error = true;   

        if (!$error) {
            $collection->push($postulante);
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
}
