<?php

namespace App\Http\Controllers;

use App\Ordinateur;
use App\Achats;
use App\Vendeurs;
use Illuminate\Http\Request;

class OrdisController extends Controller
{	

    public function index()
    {
        $users = DB::table('ordinateur')->get();

        return view('ordis.ordinateurs', ['users' => $users]);
    }


    public function display(){

    	$ordis = Ordinateur::all();
    	return view("ordis.display", ["ordis" => $ordis]);
    }

    public function ordinateurs($id){
    	$ordi = Ordinateur::findOrFail($id);
        $id_ordinateur=$id;
    	$achats = Achats::whereRaw("id_ordinateur = ?", [$id_ordinateur])->get();
        return view("ordis.ordinateurs", ["ordi" => $ordi, "achats"=>$achats]);
    }

    // public function ordinateurs($id){
    // 	return view("ordis.ordinateurs", ["id" => $id]);
    // }

    public function comparateur_pro(){
    	$item = [1=> "nom", 2=> "prix"];
    	return view("ordis.comparateur_pro", ["item" => $item]);
    }
}
