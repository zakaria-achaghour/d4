<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\ClientRequest;
use App\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        return view('clients.index', ['clients' => Client::all()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create', ['villes' => Ville::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest  $request)
    {
        //dd($request);

        $validated = $request->validated();

        $client = new Client();
        $client->pharmacien = $request->input('pharmacien');
        $client->cin = $request->input('cin');
        $client->contact = $request->input('contact');
        $client->type = (int)$request->input('type');

        $client->nom = $request->input('nom');
        $client->patente = $request->input('patente');
        $client->ice = $request->input('ice');
        $client->i_f = $request->input('i_f');
        $client->rc = $request->input('rc');
        $client->autorisation = $request->input('autorisation');

        $client->ville_id = $request->input('ville');
        $client->adress = $request->input('adress');

        $client->fichier_cin = (int)$request->input('fichier_cin');
        $client->fichier_diplome = (int)$request->input('fichier_diplome');
        $client->fichier_autorisation = (int)$request->input('fichier_autorisation');
        $client->fichier_rc_patente = (int)$request->input('fichier_rc_patente');
        $client->fichier_if_ice = (int)$request->input('fichier_if_ice');


        $client->bloque = $request->input('bloque');


        $client->user_id = Auth::id();
        $client->updated_by = Auth::id();
        $client->save();
       
        // Upload Picture for current Post
        if ($request->hasFile('fichier')) 
        {
            $file = $request->file('fichier');
             $path =  $file->storeAs('Documents',$client->id.'.'.$file->guessClientExtension());
             $path = Storage::url($path);
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
        return view('clients.edit', ['villes' => Ville::all(),'client'=>$client]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, Client $client)
    {
        $validated = $request->validated();
        $client->pharmacien = $request->input('pharmacien');
        $client->cin = $request->input('cin');
        $client->contact = $request->input('contact');
        $client->type = (int)$request->input('type');

        $client->nom = $request->input('nom');
        $client->patente = $request->input('patente');
        $client->ice = $request->input('ice');
        $client->i_f = $request->input('i_f');
        $client->rc = $request->input('rc');
        $client->autorisation = $request->input('autorisation');

        $client->ville_id = $request->input('ville');
        $client->adress = $request->input('adress');

        $client->fichier_cin = (int)$request->input('fichier_cin');
        $client->fichier_diplome = (int)$request->input('fichier_diplome');
        $client->fichier_autorisation = (int)$request->input('fichier_autorisation');
        $client->fichier_rc_patente = (int)$request->input('fichier_rc_patente');
        $client->fichier_if_ice = (int)$request->input('fichier_if_ice');


        $client->bloque = $request->input('bloque');
        $client->updated_by = Auth::id();
        
       
        // Upload Picture for current Post
        if ($request->hasFile('fichier')) 
        {
            $file =  $request->file('fichier')
                             ->storeAs('Documents',$client->id.'.'.$request->file('fichier')
                             ->guessClientExtension());

            $path = Storage::url($file);

            if($client->fichier){

                Storage::delete($client->fichier);
                $client->fichier = $path;
            }
            else{
                $client->fichier = $path;
            }
        }
         
        $client->save();
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
