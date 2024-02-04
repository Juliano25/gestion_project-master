<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilan_ventes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_bilan',
        'id_vente',
        'total_vente_vendeur',
        'total_prix_vendeur',
        'date_bilan',
    ];
}
