<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroler extends Controller
{
   public function index()
   {
    $title = 'mon titre 2';
    //return  view('articles')->with('title', $title);
    $title2 = 'mon super second titre';
    return view('articles', compact('title', 'title2'));
   }
}

?>