<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdisController extends Controller
{
    public function display(){
    	return "<h2>Tous les ordinateurs</h2>";
    }

    public function article($id){
    	return "<h3>L'article avec l'id = $id</h3>";
    }
}
