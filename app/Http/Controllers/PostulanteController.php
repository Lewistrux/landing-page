<?php

namespace App\Http\Controllers;

use App\Postulante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostulanteController extends Controller
{
    
    public function index()
    {
        $postulantes = Postulante::where('activo',true)->orderBy('created_at' ,'desc')->get();
        return view('administracion.postulantes.index',compact('postulantes'));
    }

    public function download_cv($id){
        $postulante = Postulante::FindOrFail($id);
        if($postulante->ruta == null){
            return redirect()->back()->with(['message' => 'No se ha encontrado el archivo']);
        }
        return Storage::download($postulante->ruta);
    }

}
