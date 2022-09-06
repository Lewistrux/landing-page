<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        return view('empresa.index');
    }
    public function moviles()
    {
        return view('empresa.movil');
    }
    public function fijas()
    {
        return view('empresa.fija');
    }
    public function soluciones()
    {
        return view('empresa.soluciones');
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
