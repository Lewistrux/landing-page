<?php

namespace App\Http\Controllers;

use App\Distrito;
use App\Provincia;
use App\Region;
use Illuminate\Http\Request;

class LocacionController extends Controller
{

    public function cargarProvincias(Request $request)
    {
        $data = $request->all();
        $departamento_id = $data['departamento_id'];
        $error = false;
        $message = "";

        // Castear por seguridad
        $departamento_id = str_pad($departamento_id, 2, "0", STR_PAD_LEFT);
        // $provincias = Region::find($departamento_id)->provincias;
        $provincias = Provincia::where('prov_regionID', $departamento_id)->get();
        if (empty($provincias)) {
            $error = true;
            $message = "No se cargaron las provincias. Intente nuevamente por favor";
        } else {
            $collection = collect([]);
            foreach ($provincias as $provincia) {
                $collection->push([
                    'id' => $provincia->prov_ID,  //str_pad($provincia->prov_ID, 4, "0", STR_PAD_LEFT),
                    'text' => $provincia->prov_nombre
                ]);
            }
        }

        $response = [
            'error' => $error,
            'message' => $message,
            'provincias' => $collection
        ];

        return response()->json($response);
    }

    public function cargarDistritos(Request $request)
    {
        $data = $request->all();
        $provincia_id = $data['provincia_id'];
        $error = false;
        $message = "";

        // Castear por seguridad
        $provincia_id = str_pad($provincia_id, 4, "0", STR_PAD_LEFT);
        // $distritos = Provincia::find($provincia_id)->distritos;
        $distritos = Distrito::where('dist_provinciaID', $provincia_id)->get();
        if (empty($distritos)) {
            $error = true;
            $message = "No se cargaron los distritos. Intente nuevamente por favor";
        } else {
            $collection = collect([]);
            foreach ($distritos as $distrito) {
                $collection->push([
                    'id' => $distrito->dist_ID,// str_pad($distrito->dist_ID, 6, "0", STR_PAD_LEFT),
                    'text' => $distrito->dist_nombre
                ]);
            }
        }

        $response = [
            'error' => $error,
            'message' => $message,
            'distritos' => $collection
        ];

        return response()->json($response);
    }
}
