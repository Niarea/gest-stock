<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs = Fournisseur::latest()->paginate(4);
    
        return view('fournisseurs.index',compact('fournisseurs'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fournisseurs = Fournisseur::all();
        return view('fournisseurs.create', compact('fournisseurs'));
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
            'nom_fournisseur' => 'required',
            'tel_fournisseur' => 'required',
            'adresse' => 'required',
            'localite' => 'required',
            ]);
    
            Fournisseur::create($request->all());
     
        return redirect()->route('fournisseurs.index')
            ->with('success','Fournisseur ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function show(Fournisseur $fournisseur)
    {
        return view('fournisseurs.show',compact('fournisseur'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function edit(Fournisseur $fournisseur)
    {
        return view('fournisseurs.edit',compact('fournisseur'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fournisseur $fournisseur)
    {
        $request->validate([
            'nom_fournisseur' => 'required',
            'tel_fournisseur' => 'required',
            'adresse' => 'required',
            'localite' => 'required',
            ]);
    
            $fournisseur->update($request->all());
     
        return redirect()->route('fournisseurs.index')
            ->with('success','Les informations du fournisseur ont été modifiées avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fournisseur $fournisseur)
    {
        $fournisseur->delete();
    
        return redirect()->route('fournisseurs.index')
            ->with('success','Fournisseur supprimé avec succès !');
    }
}
