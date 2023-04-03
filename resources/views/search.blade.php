@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-4">
         <a href="#">Filter</a>
     </div>
     <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Wyniki wyszukiwań</h4>
            @foreach($rabbits as $item)
            <div class="searched-item">
              <a href="detail/{{$item['id']}}">
              <img class="img-fluid" src="data:image/jpeg;base64,{{base64_encode($item['photo'])}}">
              <div class="">
                <h2>{{$item['name']}}</h2>
                <h5>{{$item['gender']}}</h5>
              </div>
            </a>
            </div>
            @endforeach
          </div>
     </div>
</div>
@endsection