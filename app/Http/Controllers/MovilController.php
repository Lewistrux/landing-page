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
}
