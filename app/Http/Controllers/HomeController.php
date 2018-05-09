<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->with('articles',\App\Article::all());
                           
    }
    // public function show($id)
    // {
    //     $article = Article::find($id);
    //     return view('content')->with('article',$article)->with('data',base64_decode($article->img));   
    // }
}
