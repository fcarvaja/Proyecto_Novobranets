<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;


class ProfesorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }

    public function index()
    {
        $profesores = Profesor::all();
        return view('Profesor.partials.table')->with('profesores', $profesores); 
    }

    public function create()
    {
        return view('Profesor.create');
    }

    
    public function store(Request $request)
    {
        $profesores = new Profesor;
        $profesores->rut = $request->input('rut');
        $profesores->nombres = $request->input('nombres');
        $profesores->apellidos = $request->input('apellidos');
        $profesores->calificacion = (0);
        $profesores->save();

        return redirect()->route('profesores.index');
    }

   //REVISAR
    public function show($id)
    {
        $profesores=Profesor::find($id);
       
        return  view('Profesor.show',compact('Profesores'));
    }

    
    public function edit($id)
    {
        $profesores=Profesor::find($id);
        
        return view('Profesor.edit')->with('profesores',$profesores);
    }

   
    public function update(Request $request, $id)
    {
        $profesores = Profesor::find($id);
        $profesores->rut = $request->input('rut');
        $profesores->nombres = $request->input('nombres');
        $profesores->apellidos = $request->input('apellidos');
        $profesores->save();

        return redirect()->route('profesores.index');
    }

   
    public function destroy($id)
    {
        $profesores = Profesor::find($id);
        $profesores->delete();
        
        return redirect()->route('profesores.index');
    }


}
