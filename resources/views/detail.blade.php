@extends('master')
@section("content")

<div class="container">
    @if (Session::has('flash'))
    <div class="alert alert-info">
        {{ Session::get('flash') }}
    </div>
    @endif
    <div class="row">
        <div class="col-sm-6">
            <img src="data:image/jpeg;base64,{{base64_encode($rabbit['photo'])}}" class="img-fluid">
        </div>
        <div class="col-sm-6">
            <div class="informacje">
                <h3>Informacje o króliku</h3>
            </div>
            <div class="szczegoly">
                <h4>Imię: {{$rabbit['name']}}</h4>
                <h4>Płeć: {{$rabbit['gender']}}</h4>
                <h4>Data urodzin: {{$rabbit['born']}}</h4>
            </div>
            <div class="przyciski">
                <button class="btn btn-primary">Zamów teraz!</button>
                <button class="btn btn-primary" style="margin-left: 5px;">Edytuj dane</button>
            </div>
        </div>
    </div>
</div>

@endsection