<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Role;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function index()
    {
        $equipes = Equipe::all();
        $joueurs = Joueur::all();
        $roles = Role::all();
        return view("/back/equipes/all",compact("equipes","joueurs","roles"));
    }
    public function create()
    {
        return view("/back/equipes/create");
    }
    public function store(Request $request)
    {
        $equipe = new Equipe;
        $request->validate([
            'nom'=> 'required',
            'ville'=> 'required',
            'pays'=> 'required',
            'max_joueurs'=> 'required',
        ]); // store_validated_anchor;
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->max_joueurs = $request->max_joueurs;
        $equipe->save(); // store_anchor
        return redirect()->route("equipe.index")->with("message", "Successful storage !");
    }
    public function show($id)
    {
        $equipe = Equipe::find($id);
        $joueurs = Joueur::all();
        $roles = Role::all();
        return view("/back/equipes/show",compact("equipe","joueurs","roles"));
    }
    public function edit($id)
    {
        $equipe = Equipe::find($id);
        return view("/back/equipes/edit",compact("equipe"));
    }
    public function update($id, Request $request)
    {
        $equipe = Equipe::find($id);
        $request->validate([
            'nom'=> 'required',
            'ville'=> 'required',
            'pays'=> 'required',
            'max_joueurs'=> 'required',
        ]); // update_validated_anchor;
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->max_joueurs = $request->max_joueurs;
        $equipe->save(); // update_anchor
        return redirect()->route("equipe.index")->with("message", "Successful update !");
    }
    public function destroy($id)
    {
        $equipe = Equipe::find($id);
        $equipe->delete();
        return redirect()->back()->with("message", "Successful delete !");
    }
}
