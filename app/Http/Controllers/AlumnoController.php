<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\User;
use Image;
use Auth;

class AlumnoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('is_alumno');
    }

    public function index()
    {
        $alumnos = Alumno::all();
        $usuarios = User::all();
        return view('Alumno.partials.table')->with('alumnos', $alumnos)->with('usuarios', $usuarios);
    }


    public function indexAlumno() //Para mandar la informacion al HomeAlumno.
    {

        return view('homeAlumno');
    }

    public function sanciones() //Para mandar la informacion al HomeAlumno.
    {

        return view('sanciones');
    }

    public function art28()
    {
        return view('art28');
    }

    public function art33()
    {
        return view('art33');
    }

    public function art45()
    {
        return view('art45');
    }

    public function perfilAlumno() //Para mandar la informacion al HomeAlumno.
    {
        $id = auth()->user()->id;
        $alumnos = Alumno::where('user_id', $id)->first();
        return view('perfil')->with('alumnos', $alumnos);
    }

    public function create()
    {
        $usuarios = User::all();
        return view('Alumno.create')->with('usuarios', $usuarios);;
    }


    public function store(Request $request)
    {
        $alumnos = new Alumno;
        $alumnos->rut = $request->input('rut');
        $alumnos->nombres = $request->input('nombres');
        $alumnos->apellidos = $request->input('apellidos');
        $alumnos->creditos_aprobados =$request->input('creditos_aprobados');
        $alumnos->email =$request->input('email');
        $alumnos->user_id =$request->input('user_id');
        $alumnos->save();

        return redirect()->route('alumnos.index');
    }

    //REVISAR
    public function show($id)
    {
        $alumnos=Alumno::find($id);

        return  view('Alumno.show',compact('alumnos'));
    }


    public function edit($id)
    {
        $alumnos=Alumno::find($id);
        $usuarios = User::all();
        return view('Alumno.edit')->with('alumnos',$alumnos)->with('usuarios', $usuarios);
    }

    public function update(Request $request, $id)
    {
        if(Auth::user()->type == 'admin')
        {
            $alumnos = Alumno::find($id);
            $alumnos->rut = $request->input('rut');
            $alumnos->nombres = $request->input('nombres');
            $alumnos->apellidos = $request->input('apellidos');
            $alumnos->creditos_aprobados = $request->input('creditos_aprobados');
            $alumnos->email = $request->input('email');
            $alumnos->user_id = $request->input('user_id');
            $alumnos->save();

            return redirect()->route('alumnos.index');
        }

        if(Auth::user()->type == 'alumno')
        {
            $alumnos = Alumno::find($id);
            $alumnos->nombres = $request->input('nombres');
            $alumnos->apellidos = $request->input('apellidos');
            $alumnos->email = $request->input('email');
            $alumnos->save();

            return redirect()->route('perfil');
        }
    }


    public function destroy($id)
    {
        $alumnos = Alumno::find($id);
        $alumnos->delete();

        return redirect()->route('alumnos.index');
    }
    public function update_avatar(Request $request)
    {

        $this->validate($request, [
            'avatar' => 'required|image'
        ]);

        if($request->hasFile('avatar'))
        {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $id = auth()->user()->id;
            $alumnos = Alumno::where('user_id', $id)->first();
            $alumnos->avatar = $filename;
            $alumnos->save();
        }

        return view('perfil')->with('alumnos', $alumnos)->with('notification', 'se ha actualizado tu foto de perfil');;

    }

}
