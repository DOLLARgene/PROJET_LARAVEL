<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public  $nom;
    public $prenom;
    public $classe;

    public function __Construct($nom,$prenom)
    {
         $this->nom = $name;
         $this->prenom = $prenom;
    }
    public function index()
    {
        //$etudiants = Etudiant::orderBy("nom","asc")->get();
        $etudiants = Etudiant::orderBy("nom","asc")-paginate(5);
       return view("Etudiant",compact("etudiants"));
    }
}
?> 