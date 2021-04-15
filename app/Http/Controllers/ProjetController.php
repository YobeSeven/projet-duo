<?php

namespace App\Http\Controllers;

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
}
