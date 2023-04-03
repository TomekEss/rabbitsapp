@extends('master')
@section("content")

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Lp.</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Płeć</th>
                <th scope="col">Urodzony</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($rabbits as $rabbit)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $rabbit->name }}</td>
                    <td>{{ $rabbit->gender }}</td>
                    <td>{{ $rabbit->born }}</td>
                    <td><button class="btn btn-primary">Edytuj</button></td>
                    <td><button class="btn btn-danger">Usuń</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
