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
}
