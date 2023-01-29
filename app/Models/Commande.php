<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    public $primaryKey = 'id';
    protected $fillable = [ 
        'nom_article', 'nombre_article', 'montant','client_id' , 'date_commande'
    ]; 

    public function client()
    {
    	return $this->belongsTo(Client::class);
    }
}
