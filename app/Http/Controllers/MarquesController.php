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
    public function display()
    {
        $ordis = Ordinateur::all();
        return view("ordis.marque", ["ordis" => $ordis]);
    }

    public function marque($m)
    {
        $unemarque = Ordinateur::all()->where('marque', $m);
        return view("ordis.unemarque", ["unemarque" => $unemarque]);
    }
}
