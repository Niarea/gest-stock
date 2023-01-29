<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->paginate(3);
    
        return view('articles.index',compact('articles'))
            ->with('i', (request()->input('page', 1) - 1) * 3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
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
            'num_article' => 'required',
            'libelle' => 'required',
            'prix' => 'required',
            'quantite_stock' => 'required',
            'description' => 'required',
            ]);
    
        Article::create($request->all());
     
        return redirect()->route('articles.index')
            ->with('success','article ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
        return view('articles.edit', compact('article'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'num_article' => 'required',
            'libelle' => 'required',
            'prix' => 'required',
            'quantite_stock' => 'required',
            'description' => 'required',
        ]);
    
        $article->update($request->all());
    
        return redirect()->route('articles.index')
            ->with('success','article mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
    
        return redirect()->route('articles.index')
            ->with('success','article supprimé avec succès');
    }
}
