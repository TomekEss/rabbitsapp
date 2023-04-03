<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rabbits Project</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--next -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Strona główna</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/cages">Klatki</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/allrabbits">Króliki</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/expenses">Wydatki</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/contact">Sprzedaż królików</a>
        </li>
      </ul>
      <form action="/search" class="d-flex col-sm-4">
        <input class="form-control me-2" type="text" name="query" placeholder="Wpisz imię królika" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Znajdź</button>
      </form>
      <ul class="navbar-nav">       
        @if(Session::has('user'))
        <li class="nav-item">
          <a class="nav-link active" href="/allrabbits">Mój koszyk</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">Wyloguj</a>
        </div>
      </li>
        @else
        <li class="nav-item">
          <a class="nav-link active" href="/login">Zaloguj</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/register">Zarejestruj</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>

