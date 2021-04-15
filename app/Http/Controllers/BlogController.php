<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class BlogController extends Controller
{
    public function index(){ 
        $title = "Blog"; 
        $descr = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $articles = article::all()->take(4);
        //$articles = article::all(); 
        
        // $articles = DB::table('articles')->paginate(4); 
        
        return view('pages.blog', compact('title', 'descr','articles'));
    }
}
