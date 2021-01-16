<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoActividad;

class TipoActividadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }

    public function index()
    {
        $tipoActividades = TipoActividad::all();
       
        return view('TipoActividad.partials.table')->with('tipoActividades', $tipoActividades);
    }

    
    public function create()
    {
        return view('TipoActividad.create');
    }

    
    public function store(Request $request)
    {
        $tipoActividades = new TipoActividad();
        $tipoActividades->nombre  = $request->input('nombre');
        $tipoActividades->save();

        return redirect()->route('tipoActividades.index');
    }

   //REVISAR
    public function show($id)
    {
        $tipoActividades=TipoActividad::find($id);
       
        return  view('TipoActividad.show',compact('tipoActividades'));
    }

    
    public function edit($id)
    {
        $tipoActividades=TipoActividad::find($id);
        
        return view('TipoActividad.edit')->with('tipoActividades',$tipoActividades);
    }

   
    public function update(Request $request, $id)
    {
        $tipoActividades = TipoActividad::find($id);
        $tipoActividades->nombre  = $request->input('nombre');
        $tipoActividades->save();

        return redirect()->route('tipoActividades.index');
    }

   
    public function destroy($id)
    {
        $tipoActividades = TipoActividad::find($id);
        $tipoActividades->delete();
        
        return redirect()->route('tipoActividades.index');
    }


}
