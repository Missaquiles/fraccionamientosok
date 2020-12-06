<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buzon;
use Auth;
use Illuminate\Support\Facades\Validator;

class BuzonController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $quejas = Buzon::all();
        return view('buzon/list', ['quejas' => $quejas]);
    }

    public function create()
    {
        $quejas = Buzon::all();
        return view('buzon/add', ['quejas' => $quejas,'layout' => 'create']);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072'
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
            if(!empty($request->imagen)){
                $user = Auth::user()->idUsuario . Auth::user()->nombre;
                $imageName = $user.'Pic'.$request->file('imagen')->extension();  
                $request->imagen->move(public_path('img-quejas'), $imageName);
            }

            $queja = new Buzon();
            $queja -> titulo = $request-> input('titulo');
            $queja -> descripcion = $request-> input('descripcion');
            $queja -> imagen = $imageName;
            $queja -> fecha = $request-> input('fecha');
            $queja -> estatus = $request-> input('estatus');
            $queja -> usuario_idUsuario = $request-> input('usuario_idUsuario');
            $queja -> save();
            return redirect('/buzon')->with('success', "¡Alta exitosa!<br/>La queja se ha registrado correctamente");

        }
    }

    public function show($id)
    {
        $queja = Buzon::find($id);
        $quejas = Buzon::all();
        return view('buzon/idBuzon', ['quejas' => $quejas, 'queja' => $queja, 'layout' => 'show']);
    }

    public function edit($id)
    {
        $queja = Buzon::find($id);
        $quejas = Buzon::all();
        return view('buzon/edit', ['quejas' => $quejas, 'queja' => $queja]);
    }

    public function update(Request $request, $id)
    {
        $queja = Buzon::find($id);
        $queja -> respuesta = $request-> input('respuesta');
        $queja -> estatus = $request-> input('estatus');
        $queja -> save();
        return redirect('/buzon')->with('success', "¡Respuesta exitosa!<br/>La queja se ha respondido correctamente");
    }

    public function destroy($id)
    {
        $queja = Buzon::find($id);
        $queja -> delete();
        return redirect('/buzon')->with('success', "¡Eliminación exitosa!<br/>La queja se ha eliminado correctamente");
    }
}