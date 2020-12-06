<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usuarios = User::all();
        return view('usuario/list', ['usuarios' => $usuarios]);
    }

    public function create()
    {
        $usuarios = User::all();
        return view('usuario/add', ['usuarios' => $usuarios]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fotografia' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072'
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput()
                        ->with('failure', "Imagen muy pesada, intente con otra.");
        }
        else{
            $user = "";
            $imageName = "";
            if(!empty($request->fotografia)){
                $user = $request->usuario;
                $imageName = $user.'Pic';  
                $request->fotografia->move(public_path('img-pic'), $imageName);
            }
            $usuario = new User();
            $usuario -> nombre = $request-> input('nombre');
            $usuario -> apPaterno = $request-> input('apPaterno');
            $usuario -> apMaterno = $request-> input('apMaterno');
            $usuario -> usuario = $request-> input('usuario');
            $usuario -> telefono = $request-> input('telefono');
            $usuario -> correo = $request-> input('correo');
            $usuario -> tipo = $request-> input('tipo');
            $usuario -> estatus = $request-> input('estatus');
            $usuario -> noReferencia = $request-> input('noReferencia');
            $usuario -> gallardete = $request-> input('gallardete');
            $usuario -> saldoxAplicar = $request-> input('saldoxAplicar');
            $usuario -> fotografia = $imageName;
            $usuario -> password = Hash::make($request-> input('password'));
            $usuario -> save();
            return redirect('/usuario')->with('success', "¡Alta exitosa!<br/>El registro se ha realizado correctamente");
        }
    }

    public function show($id)
    {
        $usuario = User::find($id);
        $usuarios = User::all();
        return view('usuario/idBuzon', ['usuarios' => $usuarios, 'usuario' => $usuario]);
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        $usuarios = User::all();
        return view('usuario/edit', ['usuarios' => $usuarios, 'usuario' => $usuario]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'fotografia' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072'
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput()
                        ->with('failure', "Imagen muy pesada, intente con otra.");
        }
        else{
            $user = "";
            $imageName = "";
            if(!empty($request->fotografia)){
                $user = Auth::user()->idUsuario . Auth::user()->nombre;
                $imageName = $user.'Pic';  
                $request->fotografia->move(public_path('img-pic'), $imageName);
            }
            $usuario = User::find($id);
            $usuario -> nombre = $request-> input('nombre');
            $usuario -> apPaterno = $request-> input('apPaterno');
            $usuario -> apMaterno = $request-> input('apMaterno');
            $usuario -> usuario = $request-> input('usuario');
            $usuario -> telefono = $request-> input('telefono');
            $usuario -> correo = $request-> input('correo');
            $usuario -> tipo = $request-> input('tipo');
            $usuario -> estatus = $request-> input('estatus');
            $usuario -> noReferencia = $request-> input('noReferencia');
            $usuario -> gallardete = $request-> input('gallardete');
            $usuario -> saldoxAplicar = $request-> input('saldoxAplicar');
            $usuario -> fotografia = $imageName;
            $usuario -> password = Hash::make($request-> input('password'));
            $usuario -> save();
            return redirect('/usuario')->with('success', "¡Edición exitosa!<br/>El registro se ha editado correctamente");
        }
    }

    public function destroy($id)
    {/*
        $usuario = User::find($id);
        $usuario -> delete();
        return redirect('/usuario')->with('success', "Borrado exitoso!<br/>El registro se ha eliminado correctamente");*/
    }
}