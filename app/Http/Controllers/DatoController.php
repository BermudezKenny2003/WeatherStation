<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\Request;

class DatoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Dato::all();
        return view('dato.index')->with('datos',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('dato.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = new Dato();
        $datos->humedad = $request->get('humedad');
        $datos->velocidad_viento = $request->get('velocidad_viento');
        $datos->presion = $request->get('presion');
        $datos->lluvia = $request->get('lluvia');
        $datos->fecha = $request->get('fecha');
        $datos->save();

        return redirect('/datos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dato $dato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dato = Dato::find($id);
        return view('dato.edit')->with('dato',$dato);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $dato = Dato::find($id);
        $dato->humedad = $request->get('humedad');
        $dato->velocidad_viento = $request->get('velocidad_viento');
        $dato->presion = $request->get('presion');
        $dato->lluvia = $request->get('lluvia');
        $dato->fecha = $request->get('fecha');

        $dato->save();

        return redirect('/datos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $eliminarDato = Dato::find($id);
        $eliminarDato->delete();
        // redirect('/estaciones');
        return redirect()->route('datos.index');
    }
}
