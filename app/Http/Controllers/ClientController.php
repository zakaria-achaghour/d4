<?php

namespace App\Http\Controllers;

use App\Client;
use App\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
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
        return view('clients.index',['clients'=> Client::all()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create',['villes'=> Ville::all()]);
        
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
            'pharmacien' => 'required|min:3',
            'cin' => 'required',
            'contact' => 'required',

            'nom' => 'required|min:3',
            'patente' => 'unique:Clients',
            'ice' => 'unique:Clients',
            'i_f' => 'unique:Clients',
            'rc' => 'unique:Clients',
            'autorisation' => 'unique:Clients',

            'ville' => 'required',
            'adress' => 'required|min:4',
        ]);

            $client = new Client();
            $client->pharmacien = $request->input('pharmacien');
            $client->cin = $request->input('cin');
            $client->contact = $request->input('contact');

            $client->nom = $request->input('nom');
            $client->patente = $request->input('patente');
            $client->ice = $request->input('ice');
            $client->i_f = $request->input('i_f');
            $client->rc = $request->input('rc');
            $client->autorisation = $request->input('autorisation');

            $client->ville_id = $request->input('ville');
            $client->adress = $request->input('adress');

            $client->fichier_cin=(int)$request->input('fichier_cin');
            $client->fichier_diplome=(int)$request->input('fichier_diplome');
            $client->fichier_autorisation=(int)$request->input('fichier_autorisation');
            $client->fichier_rc_patent=(int)$request->input('fichier_rc_patent');
            $client->fichier_if_ice=(int)$request->input('fichier_if_ice');


            $client->bloque = $request->input('bloque');


            $client->user_id = Auth::id();
             // Upload Picture for current Post
            if($request->hasFile('picture')) {
            
                $path = $request->file('fichier')->store('clients');
                
                

                $client->fichier = $path;
            }

            $client->save();
            




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
