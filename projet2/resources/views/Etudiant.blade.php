<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>mY student crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/offcanvas-navbar/">
    <link rel="stylesheet" href="{{ asset('css\boostrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('s\boostrap.bundle.min.js') }}j">

    

    <!-- Bootstrap core CSS -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/offcanvas.css') }}" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
   <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">EtudiantCrud</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('accueil')}}">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('Etudiant')}}">Etudiant</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>




<main class="container w-100">
<div  class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm w-100">
        <div class="lh-1 w-100">
            <h3 class=" mt-5 text-dark lh-1">Listes des etudiants</h3>
            <div class="d-flex justify-content-end mb-3 mt-3">
                <button class="btn btn-primary text-white fs-5">Ajouter un nouveau etudiant</button>
            </div>
            <table class="table table-bordered table-hover w-100">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Classe</th>
                    <th scope="col">Action</th>
                </tr> 
                </thead>
                <tbody>
                  @foreach($etudiants as $etudiant)
                <tr>
                    <th scope="row">{{ $etudiants->id }}</th>
                    <td>{{ $etudiants->nom }}</td>
                    <td>{{ $etudiants->prenom }}</td>
                    <td>{{ $etudiants->classe->libelle }}</td>
                    <td>
                    <a href="#" class="btn btn-danger">Supprimer</a>
                    <a href="#" class="btn btn-info">Editer</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                {{$etudiants->link()}}
            </table>
        </div>
    </div>


</main>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

      <script src="{{ asset('js/offcanvas.js') }}"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>


    