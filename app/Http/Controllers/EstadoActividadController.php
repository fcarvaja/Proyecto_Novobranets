<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EstadoActividad;


class EstadoActividadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }

    public function index()
    {
        $estadoActividades = EstadoActividad::all();
       
        return view('EstadoActividad.partials.table')->with('estadoActividades', $estadoActividades);
    }

    
    public function create()
    {
        return view('EstadoActividad.create');
    }

    
    public function store(Request $request)
    {
        $estadoActividades = new EstadoActividad();
        $estadoActividades->nombre = $request->input('nombre');
        $estadoActividades->save();

        return redirect()->route('estadoActividades.index');
    }

   //REVISAR
    public function show($id)
    {
        $estadoActividades=EstadoActividad::find($id);
       
        return  view('EstadoActividad.show',compact('estadoActividades'));
    }

    
    public function edit($id)
    {
        $estadoActividades=EstadoActividad::find($id);
        
        return view('EstadoActividad.edit')->with('estadoActividades',$estadoActividades);
    }

   
    public function update(Request $request, $id)
    {
        $estadoActividades = EstadoActividad::find($id);
        $estadoActividades = new EstadoActividad();
        $estadoActividades->nombre = $request->input('nombre');
        $estadoActividades->save();

        return redirect()->route('estadoActividades.index');
    }

   
    public function destroy($id)
    {
        $estadoActividades = EstadoActividad::find($id);
        $estadoActividades->delete();
        
        return redirect()->route('estadoActividades.index');
    }


}
