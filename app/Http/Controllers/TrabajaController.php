<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;

class TrabajaController extends Controller
{
    public function index()
    {
        $regiones = Region::get();
        return view('Vista.trabaja_con_nosotros',compact('regiones'));
    }
}
