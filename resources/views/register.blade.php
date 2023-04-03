@extends('master')
@section("content")

<div class="container custom-register">
<form action="register" method="POST">
    @csrf
    <div class="mb-3 row" style="justify-content: center; align-items: center;">
        <label for="staticEmail" class="col-sm-1 col-form-label">Nazwa</label>
        <div class="col-sm-6">
            <input type="text" name="name" class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row" style="justify-content: center; align-items: center;">
        <label for="staticEmail" class="col-sm-1 col-form-label">Email</label>
        <div class="col-sm-6">
            <input type="text" name="email" class="form-control" id="email" placeholder="example@gmail.com">
        </div>
    </div>
    <div class="mb-3 row" style="justify-content: center; align-items: center;">
        <label for="inputPassword" class="col-sm-1 col-form-label">Hasło</label>
        <div class="col-sm-6">
            <input type="password" name="password" class="form-control" id="password">
        </div>
    </div>
    <div class="mb-3 row" style="justify-content: center; align-items: center;">
        <div class="col-sm-7 text-end"> 
            <button type="submit" class="btn btn-primary">Rejestruj</button>
        </div>
    </div>
</form>
</div>

@endsection
