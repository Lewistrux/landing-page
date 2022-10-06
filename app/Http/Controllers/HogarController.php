<?php

namespace App\Http\Controllers;

use App\Distrito;
use App\Persona;
use App\Provincia;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HogarController extends Controller
{
    public function index()
    {
        $regiones = Region::get();
        return view('hogar.index',compact('regiones'));
    }

    public function store(Request $request){
        $data = $request->all();

        $rules = [
            'tipo_documento' => 'required',
            'documento' => ['required','string', 'max:20'],
            'apellidos' => 'required',
            'nombre' => 'required',
            'numero' => 'required|numeric',
            'email' => ['nullable', 'email'],
            'departamento' => 'required',
            'provincia' => 'required',
            'distrito' => 'required',
        ];

        $message = [
            'tipo_documento.required' => 'El tipo de documento es obligatorio',
            'documento.required' => 'El nro. de documento es obligatorio',
            'apellidos.required' => 'El apellido paterno es obligatorio',
            'nombre.required' => 'El nombre es obligatorio',
            'numero.required' => 'El movil es obligatorio',
            'numero.numeric' => 'El telefono movil es solo numerico',
            'email.email' => 'El formato del correo electrónico es incorrecto',
            'departamento.required' => 'El departamento es obligatorio',
            'provincia.required' => 'La provincia es obligatorio',
            'distrito.required' => 'El distrito es obligatorio',
            'direccion.required' => 'La dirección es obligatorio'
        ];

        Validator::make($data, $rules, $message)->validate();

        $result = DB::transaction(function () use ($request) {

            // Obtenemos datos previos
            $departamento = Region::where('regi_ID',$request->departamento)->first();
            $provincia = Provincia::where('regi_ID',$request->provincia)->first();
            $distrito = Distrito::where('regi_ID',$request->distrito)->first();

            $persona = new Persona();
            $persona->tipo_documento = $request->tipo_documento;
            $persona->documento = setCadena($request->documento);
            $persona->nombre = setCadena($request->nombre);
            $persona->apellidos = setCadena($request->apellidos);
            $persona->apellido_materno = setCadena($request->apellido_materno);
            // $persona->email = setCadena($request->email, true);
            $persona->departamento = ($departamento) ? setCadena($departamento->regi_nombre) : '';
            $persona->provincia = ($provincia) ? setCadena($provincia->prov_nombre) : '';
            $persona->distrito = ($distrito) ? setCadena($distrito->dist_nombre) :  '';
            $persona->numero = setCadena($request->numero);
            $persona->save();

            return $persona;
        });

        return redirect()->route('personal.edit', ['id' => $result->id])->with(['message'=>'Personal registrado correctamente.']);
    }
}
