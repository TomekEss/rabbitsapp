@extends('master')
@section("content")

<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://cdn.shopify.com/s/files/1/0576/1974/2872/files/white-rabbit-running_1024x1024.jpg?v=1646132445" class="d-block mw-75 mh-50">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://www.thepetexpress.co.uk/blog-admin/wp-content/uploads/2012/05/shutterstock_722171287.jpg" class="d-block mw-75 mh-50">
    </div>
    <div class="carousel-item">
      <img src="https://nationaltoday.com/wp-content/uploads/2022/07/lkjhgfhjkl-5-min-1.jpg" class="d-block mw-75 mh-50">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
<div class="all-wrapper">
  <h3>Wszystkie króliki</h3>
  @foreach($rabbits as $item)
  <div class="trening-item">
  <a href="detail/{{$item['id']}}" style="text-decoration: none; color: black;">  
    <img class="trening-image" src="data:image/jpeg;base64,{{base64_encode($item['photo'])}}">
    <div class="rabbit-name" style="text-align: center;">
      <h3>{{$item['name']}}</h3>
    </div>
    </a>
  </div>
  @endforeach
</div>
</div>

<div style="clear: both;"></div>
<br>

@endsection
