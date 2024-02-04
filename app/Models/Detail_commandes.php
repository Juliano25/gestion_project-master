<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_commandes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_detail',
        'id_com',
        'id_prod',
        'quantite',
        'prix',
    ];
}
