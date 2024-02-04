<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilan_total_ventes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_bilan_total',
        'total_vente',
        'total_prix',
        'date_bilan_total',
    ];
}
