<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_prod',
        'nom_prod',
        'description',
        'prix_prod',
        'stock_dispo',
        'id_util',
        'id_categ',
    ];
}
