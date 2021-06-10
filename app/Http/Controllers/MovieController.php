<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// il modello di movie è in namespace App e me lo porto qui nel Controller
use App\Movie; //ci appendo il nome della classe

class MovieController extends Controller
{
    //archivio movies
    public function index(){

        //Ottenere dati dal Db
        $movies = Movie::all(); //tutte le colonne del modello Movie
        //dump($movies);

        return view('movies', compact('movies')); //per portare tutto alla vista con compact
    }
}
