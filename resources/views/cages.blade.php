@extends('master')
@section("content")

<div class="container">
    <div class="w3-container">
        <h1>Wszsytkie klatki</h1>
        <div class="w3-section w3-bottombar w3-padding-16">
            <span class="w3-margin-right">Filter:</span> 
            <button>ALL</button>
            <button>Metalowa</button>
            <button>Słupek</button>
            <button>Boxy</button>
            <button>Skrzynia</button>
          </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Lp.</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Numer oczka</th>
                <th scope="col">Data sprzątania</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($cages as $cage)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $cage->name }}</td>
                    <td>{{ $cage->eyletCage }}</td>
                    <td>{{ $cage->clean }}</td>
                    <td><button class="btn btn-primary">Przypisz królika</button></td>
                    <td><button class="btn btn-danger">Usuń</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

@endsection