<?php


namespace App\Http\Controllers;

use App\Ordinateur;
use App\Achats;
use App\Vendeurs;
use Illuminate\Http\Request;

// AJOUT DE LA DB ICI
use Illuminate\Support\Facades\DB;

class OrdisController extends Controller
{

    public function index()
    {
        $users = DB::table('ordinateur')->get();


        return view('ordis.ordinateurs', ['users' => $users]);
    }


    public function display()
    {
        $ordis = Ordinateur::all();
        return view("ordis.display", ["ordis" => $ordis]);
    }

    public function ordinateurs($id)
    {
        $ordi = Ordinateur::findOrFail($id);
        return view("ordis.ordinateurs", ["ordi" => $ordi]);
    }

    public function comparateur_pro()
    {
        $item = [1 => "nom", 2 => "prix"];
        return view("ordis.comparateur_pro", ["item" => $item]);
    }


    public function helloWorld()
    {
        return view("ordis.comparateur_pro");

    }

    
}