<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Role;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    //
    public function index()
    {
        $joueurs = Joueur::all();
        return view("/back/joueurs/all",compact("joueurs"));
    }
    public function create()
    {
        $roles = Role::all();
        $equipes = Equipe::all();
        return view("/back/joueurs/create",compact("roles","equipes"));
    }
    public function store(Request $request)
    {
        $joueur = new Joueur;
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'age'=> 'required',
            'telephone'=> 'required',
            'email'=> 'required',
            'genre'=> 'required',
            'pays'=> 'required',
            'role'=> 'required',
            'equipe'=> 'required',
        ]); // store_validated_anchor;
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->telephone = $request->telephone;
        $joueur->email = $request->email;
        $joueur->genre = $request->genre;
        $joueur->pays = $request->pays;
        $joueur->role_id = $request->role;
        $joueur->equipe_id = $request->equipe;
        $joueur->save(); // store_anchor
        return redirect()->route("joueur.index")->with("message", "Successful storage !");
    }
    public function show($id)
    {
        $joueur = Joueur::find($id);
        return view("/back/joueurs/show",compact("joueur"));
    }
    public function edit($id)
    {
        $joueur = Joueur::find($id);
        $roles = Role::all();
        $equipes = Equipe::all();
        return view("/back/joueurs/edit",compact("joueur","roles","equipes"));
    }
    public function update($id, Request $request)
    {
        $joueur = Joueur::find($id);
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'age'=> 'required',
            'telephone'=> 'required',
            'email'=> 'required',
            'genre'=> 'required',
            'pays'=> 'required',
            'role'=> 'required',
            'equipe'=> 'required',
        ]); // update_validated_anchor;
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->telephone = $request->telephone;
        $joueur->email = $request->email;
        $joueur->genre = $request->genre;
        $joueur->pays = $request->pays;
        $joueur->role_id = $request->role;
        $joueur->equipe_id = $request->equipe;
        $joueur->save(); // update_anchor
        return redirect()->route("joueur.index")->with("message", "Successful update !");
    }
    public function destroy($id)
    {
        $joueur = Joueur::find($id);
        $joueur->delete();
        return redirect()->back()->with("message", "Successful delete !");
    }
}
