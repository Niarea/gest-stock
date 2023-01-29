<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public $primaryKey = 'num_article';
    public $incrementing = false;
    protected $fillable = [ 
        'num_article', 'libelle', 'prix', 'quantite_stock', 'description'
    ];
}
