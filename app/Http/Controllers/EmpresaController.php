<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        return view('empresa.index');
    }
    public function moviles()
    {
        $regiones = Region::get();
        return view('empresa.movil',compact('regiones'));
    }
    public function fijas()
    {
        $regiones = Region::get();
        return view('empresa.fija',compact('regiones'));
    }
    public function soluciones()
    {
        $regiones = Region::get();
        return view('empresa.soluciones',compact('regiones'));
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
