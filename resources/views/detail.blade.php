@extends('master')
@section("content")
<div class="container">
<div class="row">
    <div class="col-sm-6">
<img class="detail-img" src="{{$product['gallery']}}">
    </div>
    <div class="col-sm-6">
<a href="{{ url('/') }}">Go Back</a>
<h2>{{$product['name']}}</h2>
<h3>Price: {{$product['price']}}</h3>
<h4>Detail: {{$product['description']}}</h4>
<h4>Category: {{$product['category']}}</h4>
<br><br>
<form action="{{ url('add_to_cart') }}" method="post">
    @csrf
<input type="hidden" name="product_id" value="{{$product['id']}}">
<button class="btn btn-primary">Add To Cart</button>
</form>
<br><br>
<button class="btn btn-success">Buy Now</button>
    </div>
</div>

</div>
@endsection
