<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (Comment::create($request->all())) {
            \AppHelper::instance()->console(implode(" ",$request->all()));
            return redirect()->back();
        } else {
            return redirect()->back()->withInput()->withErrors('失敗！');
        }
    }
}