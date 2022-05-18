@extends('master')
@section("content")
<div class="custom-product">


<div class="trending-wrapper">
<h2>My Carts</h2>
<a class="btn btn-success" href="{{url('ordernow')}}">Order Now</a> <br><br>
@foreach ($products as $item)
<div class="row searched-item cart-list-devider">
<div class="col-sm-3">
<a href="detail/{{$item->id}}">
      <img class="trending-image" src="{{$item->gallery}}">
</a>
</div>
<div class="col-sm-3">
      <div class="">
        <h2>{{$item->name}}</h2>
        <h5>{{$item->description}}</h5>
      </div>
</div>
<div class="col-sm-3">
<a href="removecart/{{$item->id}}" class="btn btn-warning">Remove to Cart</a>
</div>
    </div>
@endforeach
  </div>
</div>


@endsection
