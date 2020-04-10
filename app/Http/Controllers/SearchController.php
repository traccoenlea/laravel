<?php

namespace App\Http\Controllers;

use App\Ordinateur;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search($s){
    	$SearchOrdi = Ordinateur::whereRaw("name LIKE CONCAT('%',?,'%')", [$s])->get();
    	$SearchMarque = Ordinateur::whereRaw("marque LIKE CONCAT('%',?,'%')", [$s])->get();
    	return view("search.search", ["SearchOrdi" => $SearchOrdi, "SearchMarque" => $SearchMarque]);
    }
}
