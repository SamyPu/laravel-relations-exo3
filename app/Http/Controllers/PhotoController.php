<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //
    public function index()
    {
        $photos = Photo::all();
        return view("/back/photos/all",compact("photos"));
    }
    public function create()
    {
        return view("/back/photos/create");
    }
    public function store(Request $request)
    {
        $photo = new Photo;
        $request->validate([
            'photo_joueur'=> 'required',
        ]); // store_validated_anchor;
        $photo->photo_joueur = $request->photo_joueur;
        $photo->save(); // store_anchor
        return redirect()->route("photo.index")->with("message", "Successful storage !");
    }
    public function show($id)
    {
        $photo = Photo::find($id);
        return view("/back/photos/show",compact("photo"));
    }
    public function edit($id)
    {
        $photo = Photo::find($id);
        return view("/back/photos/edit",compact("photo"));
    }
    public function update($id, Request $request)
    {
        $photo = Photo::find($id);
        $request->validate([
            'photo_joueur'=> 'required',
        ]); // update_validated_anchor;
        $photo->photo_joueur = $request->photo_joueur;
        $photo->save(); // update_anchor
        return redirect()->route("photo.index")->with("message", "Successful update !");
    }
    public function destroy($id)
    {
        $photo = Photo::find($id);
        $photo->delete();
        return redirect()->back()->with("message", "Successful delete !");
    }
}
