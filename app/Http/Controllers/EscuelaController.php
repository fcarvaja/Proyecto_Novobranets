<?php

namespace App\Http\Controllers;

use App\Escuela;
use App\Facultad;
use Illuminate\Http\Request;

class EscuelaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('is_alumno');
    }

    public function index() //Te envia a la vista que corresponde a la vista
    {
        $escuelas = Escuela::all();
        $facultads = Facultad::all();
        return view('Escuela.partials.table')->with('escuelas', $escuelas)->with('facultads', $facultads);
    }


    public function create()
    {
        $facultads = Facultad::all();
        return view('Escuela.create')->with('facultads', $facultads);;
    }


    public function store(Request $request)
    {
        $escuelas = new Escuela();
        $escuelas->nombre_escuela = $request->input('nombre_escuela');
        $escuelas->facultad_id =$request->input('facultad_id');
        $escuelas->save();

        return redirect()->route('escuelas.index');
    }

    //REVISAR
    public function show($id)
    {
        $escuelas=Escuela::find($id);

        return  view('Escuela.show',compact('escuelas'));
    }


    public function edit($id)
    {
        $escuelas =Escuela::find($id);
        $facultads = Facultad::all();
        return view('Escuela.edit')->with('escuelas',$escuelas)->with('facultads', $facultads);
    }


    public function update(Request $request, $id)
    {
        $escuelas = Escuela::find($id);
        $escuelas->nombre_escuela = $request->input('nombre_escuela');
        $escuelas->facultad_id =$request->input('facultad_id');
        $escuelas->save();

        return redirect()->route('escuelas.index');
    }


    public function destroy($id)
    {
        $escuelas = Escuela::find($id);
        $escuelas->delete();

        return redirect()->route('escuelas.index');
    }


}
