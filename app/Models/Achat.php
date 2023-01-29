<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'nom_client', 'tel_client', 'nom_article', 'nombre_article', 'montant_article'
    ];
}
