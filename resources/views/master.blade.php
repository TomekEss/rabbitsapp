<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Króliczy baron</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    {{View::make('header')}}
    {{View::make('vendor/sweetalert/alert')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    /* Okno logowania */
    .custom-login{
        height: 500px;
        padding-top: 150px;
    }
    /* Okno rejestracji */
    .custom-register{
        height: 500px;
        padding-top: 150px;
    }
    /* Strona główna - przewijane zdjęcia BLOK */
    .carousel-inner {
        height: 400px;
    }
    /* Strona główna - przewijaene zdjęcia */
    .carousel-item img{
        display: block;
        margin: auto;
        width: auto;
        height: 450px;
        object-fit: scale-down;
    }
    /* Strona główna - rozmiar zdjęć królików */
    .trening-image{
        height: 180px;
        width: 240px;
        object-fit: fill;
    }
    /* Strona główna - wyświetlanie okienek z królikami */
    .trening-item{
        float: left;
        margin-inline-end: 20px;
    }
    /* Szczegóły królika -  */
    .informacje{
        text-align: center;
    }

    /* Strona logowania */
    .divider:after,
    .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
    }
    .h-custom {
    padding-top: 150px;
    padding-block: 150px;
    height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
    .h-custom {
    height: 100%;
    }
    }

</style>
</html>