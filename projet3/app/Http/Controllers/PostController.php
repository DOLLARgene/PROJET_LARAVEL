<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
       
        return view('home',
        [
        'articles' => Post::all()
        ]);
    }
    public function show($id)
    {
        return view('article',[
            'article' => Post::find($id)
        ]);
    }
}
