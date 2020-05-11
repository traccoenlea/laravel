<?php

namespace App\Http\Controllers;

use App\Ordinateur;
use App\Achats;
use App\Vendeurs;
use Illuminate\Http\Request;

// AJOUT DE LA DB ICI
use Illuminate\Support\Facades\DB;

class MarquesController extends Controller
{	
    public function display(){
    	$marques = Vendeurs::all();
    	return view("ordis.marque", ["marques" => $marques]);
    }
}
