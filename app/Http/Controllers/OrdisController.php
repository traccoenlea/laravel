<?php

namespace App\Http\Controllers;

use App\ordinateur;
use Illuminate\Http\Request;

class OrdisController extends Controller
{	


    public function display(){

    	$ordis = ordinateur::all();
    	return view("ordis.display", ["ordis" => $ordis]);
    }

    public function ordinateurs($id){
    	$ordi = Ordinateur::findOrFail($id);
    	
    	return view("ordis.ordinateurs", ["ordi" => $ordi]);
    }

    // public function ordinateurs($id){
    // 	return view("ordis.ordinateurs", ["id" => $id]);
    // }

    public function comparateur_pro(){
    	$item = [1=> "nom", 2=> "prix"];
    	return view("ordis.comparateur_pro", ["item" => $item]);
    }
}
