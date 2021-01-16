<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sancion;



class SancionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('is_admin');
    }

    public function index()
    {
        $sancions = Sancion::all();
        return view('Sancion.partials.table')->with('sancions', $sancions);
    }

    public function indexSancion()
    {
        $sancions = Sancion::all();
        return view('formulario')->with('sancions', $sancions);
    }

    public function create()
    {
        return view('Sancion.create');
    }

    
    public function store(Request $request)
    {
        $sancions = new Sancion;
        $sancions->gestion_academica = $request->input('gestion_academica');
        $sancions->descripcion = $request->input('descripcion');
        $sancions->formulario = $request->input('formulario');
        $sancions->email = $request->input('email');
        $sancions->fono = $request->input('fono');
        $sancions->save();

        return redirect()->route('sancions.index');
    }

   //REVISAR
    public function show($id)
    {
        $sancions=Sancion::find($id);
       
        return  view('Sancion.show',compact('Sancions'));
    }

    
    public function edit($id)
    {
        $sancions=Sancion::find($id);
        
        return view('Sancion.edit')->with('sancions',$sancions);
    }

   
    public function update(Request $request, $id)
    {
        $sancions = Sancion::find($id);
        $sancions->gestion_academica = $request->input('gestion_academica');
        $sancions->descripcion = $request->input('descripcion');
        $sancions->formulario = $request->input('formulario');
        $sancions->email = $request->input('email');
        $sancions->fono = $request->input('fono');
        $sancions->save();

        return redirect()->route('sancions.index');
    }

   
    public function destroy($id)
    {
        $sancions = Sancion::find($id);
        $sancions->delete();
        
        return redirect()->route('sancions.index');
    }


}
