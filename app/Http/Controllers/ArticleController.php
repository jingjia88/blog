<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class ArticleController extends Controller
{
    public function show($id)
    {
        return view('article/show')->with('article',Article::with('hasManyComments')->find($id));
    }
}
