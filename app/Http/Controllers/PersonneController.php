<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonneController extends Controller
{
    // CRUD - Show
    public function show (Personne $id) {
        $personne = $id;
        return view('admin.show.showPersonne', compact('personne'));
    }
    // CRUD - Update
    public function edit (Personne $id) {
        $personne = $id;
        return view('admin.edit.editPersonne', compact('personne'));
    }
    public function update (Personne $id, Request $request) {
        $personne = $id;
        $personne->nom = $request->nom;
        $personne->age = $request->age;
        $personne->email = $request->email;
        $personne->telephone = $request->telephone;
        $personne->save();
        return redirect()->route('personnesList');
    }
    // CRUD - Delete 
    public function destroy(Personne $id) {
        $id->delete();
        return redirect()->route('personnesList');
    }
    // CRUD - Delete All
    public function clearTable (){
        DB::table('personnes')->truncate();
        return redirect()->route('home');
    }
}
