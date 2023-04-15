<?php

namespace App\Http\Controllers;

use App\Models\Damage;
use Illuminate\Http\Request;

class DamageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $damages = Damage::all();
        return view('damage.index')->with('damages',$damages);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('damage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $damages = new Damage();
        $damages->nombre = $request->get('nombre');
        $damages->descripcion = $request->get('descripcion');
        $damages->save();

        return redirect('/damages');
    }

    /**
     * Display the specified resource.
     */
    public function show(Damage $damage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $damage = Damage::find($id);
        return view('damage.edit')->with('damage',$damage);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $damage = Damage::find($id);
        $damage->nombre = $request->get('nombre');
        $damage->descripcion = $request->get('descripcion');

        $damage->save();

        return redirect('/damages');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $eliminarDamage = Damage::find($id);
        $eliminarDamage->delete();
        // redirect('/estaciones');
        return redirect()->route('damages.index');
    }
}
