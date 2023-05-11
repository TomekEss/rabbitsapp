@extends('master')
@section("content")
{{-- 
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
</div> --}}


<div class="container">
  @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
    
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form action="register" method="POST">
                @csrf
              <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Rejestracja</p>
              </div>

              <!-- Name input -->
              <div class="form-outline mb-4">
                <input type="text" id="name" name="name" class="form-control form-control-lg"
                  placeholder="Wpisz nazwę użytkownika"/>
                <label class="form-label" for="form3Example3">Nazwa użytkownika</label>
              </div>
    
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control form-control-lg"
                  placeholder="Wpisz adress e-mail"/>
                <label class="form-label" for="form3Example3">Adres email</label>
              </div>
    
              <!-- Password input -->
              <div class="form-outline mb-3">
                <input type="password" id="password" name="password" class="form-control form-control-lg"
                  placeholder="Wpisz hasło" />
                <label class="form-label" for="form3Example4">Hasło</label>
              </div>
    
              <div class="text-center text-lg-end mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg"
                  style="padding-left: 2.5rem; padding-right: 2.5rem;">Zarejestruj</button>
                <p class="small fw-bold mt-2 pt-1 mb-0">Posiadasz już konto? <a href="/login"
                    class="link-danger">Zaloguj się!</a></p>
              </div>
    
            </form>
          </div>
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
              class="img-fluid" alt="Sample image">
          </div>
        </div>
    </div>
    </div>

@endsection
