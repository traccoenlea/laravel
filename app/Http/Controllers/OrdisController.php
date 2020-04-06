<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdisController extends Controller
{
    public function display(){
        $ordis = [1=> "Ordis 1", 2=>"Ordis 2", 3=> "Ordis 3"];
    	return view("ordis.display", ["ordis" => $ordis]);
    }

    public function ordinateurs($id){
    	return view("ordis.ordinateurs", ["id" => $id]);
    }

    public function comparateur_pro(){
    	$item = [1=> "nom", 2=> "prix"];
    	return view("ordis.comparateur_pro", ["item" => $item]);
    }
}
