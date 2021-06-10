<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //pacchetti usati da Laravel

class PageController extends Controller //funzionalità ereditate
{
    //metodi per gestire le routes

    /*Home*/
    public function index() {
        return view('home');//qui potrei inserire un array con chiavi associative che vengono da DB
                                //('home',['skills' => $skills, 'clients' => $clients]);
                                //in modo più elegante con compact
                                //('home', compact('skills', 'clients')); che cerca la parte di stringa identica al nome della variabile
    } 

    /*Contatti*/
    public function contatti() {
        return view('contatti');
    } 
}
