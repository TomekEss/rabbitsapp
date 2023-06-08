@extends('master')
@section("content")

    <head>
        <style>
            .ee{
                padding-top: 50px;
            }
            .col{
                padding-top: 25px;
                padding-block-end: 25px;
            }
        </style>
    </head>

    <img src="{{ asset('photo/cage.png') }}" alt="addrabbit" style="height: 350px; display: block; margin-left: auto; margin-right: auto; padding-top: 50px;">

    <div class="container text-center">
        <form action="createcage" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="ee col-sm-6">
                    <input type="number" name="eyletcage" class="form-control" placeholder="Numer oczka">
                </div>
                <div class="ee col-sm-6">
                    <select class="form-select" name="name" aria-label="Default select example">
                        <option value="Metalowa">Metalowa</option>
                        <option value="Zielona">Zielona</option>
                        <option value="Skrzynia">Skrzynia</option>
                        <option value="Drewniana">Drewniana</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input id="photo" name="photo" type="file" class="form-control">
                </div>
                <div class="col">
                    <input id="cleandate" name="cleandate" type="date" class="form-control" placeholder="Data sprzątania">
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>

@endsection
