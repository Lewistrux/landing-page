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

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
