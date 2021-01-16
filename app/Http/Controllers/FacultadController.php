<?php

namespace App\Http\Controllers;

use App\Escuela;
use App\Facultad;
use Illuminate\Http\Request;


class FacultadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $facultads = Facultad::all();
        return view('Facultad.partials.table')->with('facultads', $facultads);
    }

    public function indexMapa(Request $request) //Resive el request de el formulario, nos interesa solo el id
    {
        $facultads = Facultad::all();
        $opcion = $request->input('opcion'); //Guarda la opcion elejida para luego mostrar los datos que corresponden
        $escuelas = Escuela::all(); //Toma las escuelas y las envia para luego mostrar las que corresponden
        return view('mapaEscuela')->with('facultads', $facultads)->with('opcion', $opcion )->with('escuelas', $escuelas);
        //dd($request->all());
    }

    public function menu()
    {
        $facultads = Facultad::all();
        return view('menuMapas')->with('facultads', $facultads);
    }

    public function create()
    {
        return view('Facultad.create');
    }


    public function store(Request $request)
    {
        $facultads = new Facultad;
        $facultads->nombre_facultad = $request->input('nombre_facultad');
        $facultads->decano = $request->input('decano');
        $facultads->vicedecano = $request->input('vicedecano');
        $facultads->secretario_facultad = $request->input('secretario_facultad');
        $facultads->nombre_edificio = $request->input('nombre_edificio');
        $facultads->fono_edificio = $request->input('fono_edificio');
        $facultads->direccion_edificio = $request->input('direccion_edificio');
        $facultads->contacto_facultad = $request->input('contacto_facultad');
        $facultads->fono_contacto = $request->input('fono_contacto');
        $facultads->fax_contacto = $request->input('fax_contacto');
        $facultads->email_contacto = $request->input('email_contacto');
        $facultads->imagen_edificio = $request->input('imagen_edificio');
        $facultads->latitud_mapa = $request->input('latitud_mapa');
        $facultads->longitud_mapa = $request->input('longitud_mapa');
        $facultads->save();

        return redirect()->route('facultads.index');
    }

    //REVISAR
    public function show($id)
    {
        $facultads=Facultad::find($id);

        return  view('Facultad.show',compact('Facultads'));
    }

    public function edit($id)
    {
        $facultads=Facultad::find($id);

        return view('Facultad.edit')->with('facultads',$facultads);
    }

    public function update(Request $request, $id)
    {
        $facultads = Facultad::find($id);
        $facultads->nombre_facultad = $request->input('nombre_facultad');
        $facultads->decano = $request->input('decano');
        $facultads->vicedecano = $request->input('vicedecano');
        $facultads->secretario_facultad = $request->input('secretario_facultad');
        $facultads->nombre_edificio = $request->input('nombre_edificio');
        $facultads->fono_edificio = $request->input('fono_edificio');
        $facultads->direccion_edificio = $request->input('direccion_edificio');
        $facultads->contacto_facultad = $request->input('contacto_facultad');
        $facultads->fono_contacto = $request->input('fono_contacto');
        $facultads->fax_contacto = $request->input('fax_contacto');
        $facultads->email_contacto = $request->input('email_contacto');
        $facultads->imagen_edificio = $request->input('imagen_edificio');
        $facultads->latitud_mapa = $request->input('latitud_mapa');
        $facultads->longitud_mapa = $request->input('longitud_mapa');
        $facultads->save();

        return redirect()->route('facultads.index');
    }

    public function destroy($id)
    {
        $facultads = Facultad::find($id);
        $facultads->delete();

        return redirect()->route('facultads.index');
    }


}

