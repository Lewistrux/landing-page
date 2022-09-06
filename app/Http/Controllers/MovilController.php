<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;

class MovilController extends Controller
{

    public function index()
    {
        $regiones = Region::get();
        return view('movil.index',compact('regiones'));
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
