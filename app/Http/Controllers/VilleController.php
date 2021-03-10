<?php

namespace App\Http\Controllers;

use App\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.villes.index',['villes'=> Ville::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.villes.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|min:3|unique:villes'
        ]);

        $ville = new Ville();
        $ville->nom = $request->input('nom');
        $ville->save();
         
        return redirect()->route('villes.index')->with(['success' => 'Ville ajouté ']);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function show(Ville $ville)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function edit(Ville $ville)
    {
        return view('admin.villes.edit',['ville'=>$ville]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ville $ville)
    {
        $request->validate([
            'nom' => 'required|min:3|unique:villes'
        ]);
        $ville->nom =$request->input('nom');
        $ville->save();
        return redirect()->route('villes.index')->with(['success' => 'Ville mise à jour  ']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $ville =Ville::findOrFail((int) $request->input('deleteVilleid'));
        $ville->delete();

        
      

        return redirect()->route('villes.index')->with(['success' => 'Ville supprimé ']);

    }
}
