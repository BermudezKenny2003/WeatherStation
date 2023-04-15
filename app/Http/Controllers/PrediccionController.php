<?php

namespace App\Http\Controllers;

use App\Models\Prediccion;
use Illuminate\Http\Request;

class PrediccionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prediccions = Prediccion::all();
        return view('prediccion.index')->with('prediccions',$prediccions);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prediccion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prediccion = new Prediccion();
        $prediccion->nombre = $request->get('nombre');
        $prediccion->descripcion = $request->get('descripcion');
        $prediccion->fecha = $request->get('fecha');
        $prediccion->save();

        return redirect('/prediccions');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prediccion $prediccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prediccion = Prediccion::find($id);
        return view('prediccion.edit')->with('prediccion',$prediccion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $prediccion = Prediccion::find($id);
        $prediccion->nombre = $request->get('nombre');
        $prediccion->descripcion = $request->get('descripcion');
        $prediccion->fecha = $request->get('fecha');

        $prediccion->save();

        return redirect('/prediccions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prediccion $id)
    {
        $eliminarPrediccion = Prediccion::find($id);
        $eliminarPrediccion->delete();
        // redirect('/prediccions');
        return redirect()->route(prediccions.index);
    }
}
