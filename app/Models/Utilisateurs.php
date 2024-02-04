<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_util',
        'nom_util',
        'email',
        'password',
        'contact',
        'id_profil',
        'date_creation',
    ];
}
