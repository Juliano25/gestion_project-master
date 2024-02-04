<?php

namespace App\Http\Controllers\accueil;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index(){
        return view("accueil");
    }
}
