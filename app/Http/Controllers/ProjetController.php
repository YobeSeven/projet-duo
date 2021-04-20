<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index() {
        $projets = projet::all()->take(15);

        return view("pages.portfolio",compact("projets"));
    }

    public function create(){
        return view('admin.portfolio.afficherAddForm');
    }


    public function afficherprojet(Request $request){
        $post = new projet(); 

        $post->titre = $request->titre; 
        $post->imgurl = $request->imgurl; 
        $post->description = $request->desc; 
        $post->datagroup = $request->datagroup;

        $post->save(); 

        return redirect()->route('admin'); 
    }
    public function show(){
        $projets = projet::all();
        return view('admin.portfolio.all-portfolio', compact('projets'));
    }
    public function destroy(projet $id){
        $id->delete();
        return redirect() -> route('admin');
    }

    public function edit(projet $id){
        $projet = $id;
        return view('admin.portfolio.edit-portfolio', compact('projet'));
    }

    public function update(projet $id, Request $request){
        $projet = $id;
        $projet->titre = $request->titre;
        $projet->imgurl = $request->imgurl;
        $projet->description = $request->desc;
        $projet->datagroup = $request->datagroup;

        $projet->save();

        return redirect()->route('admin');
    }
}
