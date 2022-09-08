<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function acceso()
    {
        return view('administracion.login');
    }

    public function login(Request $request)
    {
        $data=request()->validate([
            'name'=>'required',
            'password'=>'required'
        ],
        [
            'name.required'=>'Ingrese Usuario',
            'password.required'=>'Ingrese Contraseña',
        ]);
        if(Auth::attempt($data))
        {
            $con='ok';
        }
        $name=$request->get('name');
        $query=User::where('name','=',$name)->get();
        if($query->count() !=0)
        {
            $hashp=$query[0]->password;
            $password=$request->get('password');
            if(password_verify($password,$hashp))
            {
                $hashp=$query[0]->rol;
                // return view('administracion.index');
                return redirect()->route('administracion');
            }
            else
            {
                return back()->withErrors(['password'=>'Contraseña no Valida'])->withInput([request('password')]);
            }
        }
        else
        {
            return back()->withErrors(['name'=>'Usuario no Valida'])->withInput([request('usuario')]);
        }
    }

    public function index()
    {
        return view('administracion.index');
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
