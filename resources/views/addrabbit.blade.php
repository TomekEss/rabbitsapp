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

<img src="{{ asset('photo/addrabbit.png') }}" alt="addrabbit" style="height: 350px; display: block; margin-left: auto; margin-right: auto; padding-top: 50px;">   

<div class="container text-center">
    <form action="/creatrabbit" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="row">
      <div class="ee col-sm-6">
        <input type="text" name="name" class="form-control" placeholder="Imie królika">
      </div>
      <div class="ee col-sm-6">
        <select class="form-select" name="gender" aria-label="Default select example">
        <option selected value="Nierozpoznana">Nierozpoznana</option>
        <option value="Samiec">Samiec</option>
        <option value="Samica">Samica</option>
        </select>
      </div>
    </div>
    <div class="row">
        <div class="col">
          <input id="photo" name="photo" type="file" class="form-control">
        </div>
        <div class="col">
          <input id="born" name="born" type="date" class="form-control">
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>
</div>

@endsection