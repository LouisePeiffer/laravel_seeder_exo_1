<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index () {
        return view('home');
    } 
    public function personnesList () {
        $allPersonnes = Personne::all();
        return view('pages.personnesList', compact('allPersonnes'));
    }
}
