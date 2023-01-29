<?php

namespace App\Http\Controllers;

use App\Models\Achat;
use App\Models\Client;
use App\Models\Article;

use Illuminate\Http\Request;

class AchatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achats = Achat::latest()->paginate(3);
    
        return view('achats.index',compact('achats'))
            ->with('i', (request()->input('page', 1) - 1) * 3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $articles = Article::all();
        return view('achats.create', compact('clients', 'articles'));
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
            'nom_client' => 'required',
            'tel_client' => 'required',
            'nom_article' => 'required',
            'nombre_article' => 'required',
            'montant_article' => 'required',
            ]);
    
        Achat::create($request->all());
     
        return redirect()->route('articles.index')
            ->with('success','Achat a été enregistré avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function show(Achat $achat)
    {
        return view('achats.show', compact('achat'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function edit(Achat $achat)
    {
        return view('achats.edit', compact('achat'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achat $achat)
    {
        $request->validate([
            'nom_client' => 'required',
            'tel_client' => 'required',
            'nom_article' => 'required',
            'nombre_article' => 'required',
            'montant_article' => 'required',
        ]);
    
        $achat->update($request->all());
    
        return redirect()->route('achats.index')
            ->with('success','achat modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achat $achat)
    {
        $achat->delete();
    
        return redirect()->route('achats.index')
            ->with('success',"L'achat supprimé avec succès");
    }
}
