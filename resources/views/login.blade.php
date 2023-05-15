@extends('master')
@section("content")

<div class="container">
<div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">

      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="/login" method="POST">
            @csrf
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Logowanie</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="staticEmail" name="email" class="form-control form-control-lg"
              placeholder="Wpisz adress e-mail" value="tomek@gmail.com"/>
            <label class="form-label" for="form3Example3">Adres email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="inputPassword" name="password" class="form-control form-control-lg"
              placeholder="Wpisz hasło" />
            <label class="form-label" for="form3Example4">Hasło</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Zapamiętaj mnie
              </label>
            </div>
            <a href="#!" class="text-body">Zapomniałeś hasło?</a>
          </div>

          <div class="text-center text-lg-end mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Zaloguj</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Nie posiadsz konta? <a href="/register"
                class="link-danger">Zarejestruj</a></p>
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
