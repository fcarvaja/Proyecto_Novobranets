<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Profesor;




class CursoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }

    public function index()
    {
        $cursos = Curso::all();
        $profesores = Profesor::all();
        return view('Curso.partials.table')->with('cursos', $cursos)->with('profesores',$profesores);
    }

    
    public function create()
    {
        $profesores = Profesor::all();
        return view('Curso.create')->with('profesores',$profesores);
    }

    
    public function store(Request $request)
    {
        $cursos = new Curso;
        $cursos->sigla = $request->input('sigla');
        $cursos->nombre  = $request->input('nombre');
        $cursos->descripcion  = $request->input('descripcion');
        $cursos->creditos  = $request->input('creditos');
        $cursos->profesor_id  = $request->input('profesor_id');
        $cursos->save();

        return redirect()->route('cursos.index');
    }

   //REVISAR
    public function show($id)
    {
        $cursos=Curso::find($id);
       
        return  view('Curso.show',compact('cursos'));
    }

    
    public function edit($id)
    {
        $cursos=Curso::find($id);
        $profesores = Profesor::all();
        
        return view('Curso.edit')->with('cursos',$cursos)->with('profesores',$profesores);;
    }

   
    public function update(Request $request, $id)
    {
        $cursos = Curso::find($id);
        $cursos->sigla = $request->input('sigla');
        $cursos->nombre  = $request->input('nombre');
        $cursos->descripcion  = $request->input('descripcion');
        $cursos->creditos  = $request->input('creditos');
        $cursos->profesor_id  = $request->input('profesor_id');
        $cursos->save();

        return redirect()->route('cursos.index');
    }

   
    public function destroy($id)
    {

        $cursos = Curso::find($id);
        $cursos->delete();
        
        return redirect()->route('cursos.index');
    }


}
