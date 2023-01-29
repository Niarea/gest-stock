<?php

namespace App\Http\Controllers;

use App\Models\{ Commande, Client, Article };
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandes = Commande::latest()->paginate(4);

        return view('commandes.index',compact('commandes'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $clients = Client::all();
        $articles = Article::all();
        return view('commandes.create', compact('clients', 'articles'));

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
            'nom_article' => 'required',
            'nombre_article' => 'required',
            'montant' => 'required',
            'client_id' => 'required',
            'date_commande' => 'required',
            ]);

        Commande::create($request->all());

        return redirect()->route('commandes.index')
            ->with('success','Commande ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function show(Commande $commande)
    {
        return view('commandes.show',compact('commande'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function edit(Commande $commande)
    {
        return view('commandes.edit',compact('commande'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commande $commande)
    {
        $request->validate([
            'nom_article' => 'required',
            'nombre_article' => 'required',
            'montant' => 'required',
            'client_id' => 'required',
            'date_commande' => 'required',
            ]);

            $commande->update($request->all());

        return redirect()->route('commandes.index')
            ->with('success','Commande modifiée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commande $commande)
    {
        $commande->delete();

        return redirect()->route('commandes.index')
            ->with('success','Commande supprimée avec succès !');
    }
}
