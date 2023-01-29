<?php

namespace App\Http\Livewire;
use App\Models\Commande;
use App\Models\Client;
use App\Models\Article;

use Livewire\Component;

class Commandes extends Component
{
    public $nom_article;
    public $nombre_article;
    public $montant;
    public $client_id;
    public $date_commande;
    public $test='Faire un test';

    // protected $rules = [
    //     'nom_article' => 'required|nom_article',
    //     'nombre_article' => 'required|nombre_article',
    //     'montant' => 'required|montant',
    //     'client_id' => 'required|client_id',
    //     'date_commande' => 'required|date_commande',
    // ];



    public function saveCommande()
    {
        dd($this->montant);
    }



    public function render()
    {
        $clients = Client::all();
        $articles = Article::all();
        return view('livewire.commandes', [
            'clients'=> $clients,
            'articles'=> $articles,
        ]);
    }
}


