<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class BlogController extends Controller
{
    public function index(){ 
        $title = "Blog"; 
        $descr = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $articles = article::all()->take(4);

        return view('pages.blog', compact('title', 'descr','articles'));
    }


    public function create(){
        return view('admin.blog.addform');
    }


    public function addblog(Request $request){
        $post = new article(); 

        $post->titre = $request->titre; 
        $post->imgurl = $request->imgurl; 
        $post->description = $request->desc; 

        $post->save(); 

        return redirect()->route('admin'); 
    }
    
    public function show (){
        $articles = article::all();
        return view('admin.blog/all-blog', compact('articles'));
    }

    public function destroy(article $id){

        $id->delete();
        return redirect()->route('admin');
    }
}
