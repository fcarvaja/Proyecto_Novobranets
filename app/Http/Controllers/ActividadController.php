<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;
use App\EstadoActividad;
use App\TipoActividad;
use App\Alumno;
use Calendar;
use Validator;

class ActividadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $actividads = Actividad::get();
        $actividad_list = [];
        foreach ($actividads as $key => $actividad)
        {
            $actividad_list[] = Calendar::event(
                $actividad->titulo,
                true,
                new \DateTime($actividad->fecha_inicio),
                new \DateTime($actividad->fecha_termino.' +1 day')
            );
        }
        $calendar_details = Calendar::addEvents($actividad_list);

        return view('calendario', compact('calendar_details') );
    }

    public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'fecha_inicio' => 'required',
            'fecha_termino' => 'required'
        ]);

        if ($validator->fails()) {
            \Session::flash('warnning','Por favor ingresa los eventos validos');
            return Redirect::to('/events')->withInput()->withErrors($validator);
        }

        $actividads = new Actividad;
        $actividads->titulo = $request['titulo'];
        $actividads->fecha_inicio = $request['fecha_inicio'];
        $actividads->fecha_termino = $request['fecha_termino'];
        $actividads->save();

        \Session::flash('success','La actividad se agrego con exito.');
        return Redirect::to('/actividads');
    }

    public function create()
    {
        $tipoActividades = TipoActividad::all();
        $estadoActividades = EstadoActividad::all();
        $alumnos = Alumno::all();
        return view('Actividad.create')->with('tipoActividades', $tipoActividades)->with('estadoActividades', $estadoActividades)->with('alumnos', $alumnos);
    }

    
    public function store(Request $request)
    {
        $actividades = new Actividad();
        $actividades->titulo = $request->input('titulo');
       // $actividades->descripcion = $request->input('descripcion');
        $actividades->fecha_termino = $request->input('fecha_termino');
        $actividades->tipoActividad_id = $request->input('tipoActividad_id');
        $actividades->estadoActividad_id = $request->input('estadoActividad_id');
        $actividades->alumno_id  = $request->input('alumno_id');
        $actividades->save();

        return redirect()->route('actividades.index');
    }


    public function show($id)
    {
        $actividades=Actividad::find($id);
       
        return  view('Actividad.show',compact('actividades'));
    }

    
    public function edit($id)
    {
        $actividades=Actividad::find($id);
        $tipoActividades = TipoActividad::all();
        $estadoActividades = EstadoActividad::all();
        $alumnos = Alumno::all();
        return view('Actividad.edit')->with('actividades',$actividades)->with('tipoActividades', $tipoActividades)->with('estadoActividades', $estadoActividades)->with('alumnos', $alumnos);
    }

   
    public function update(Request $request, $id)
    {
        $actividades = Actividad::find($id);
        $actividades->titulo = $request->input('titulo');
       // $actividades->descripcion  = $request->input('descripcion');
        $actividades->fecha_termino  = $request->input('fecha_termino');
        $actividades->tipoActividad_id  = $request->input('tipoActividad_id');
        $actividades->estadoActividad_id  = $request->input('estadoActividad_id');
        $actividades->alumno_id  = $request->input('alumno_id');
        $actividades->save();

        return redirect()->route('actividades.index');
    }

   
    public function destroy($id)
    {
        $actividades = Actividad::find($id);
        $actividades->delete();
        
        return redirect()->route('actividades.index');
    }


}
