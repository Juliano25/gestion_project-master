<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_vente',
        'id_util',
        'montant_vente',
        'date_vente',
        'statut',
    ];
}
