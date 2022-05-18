@extends('master')
@section("content")
<div class="custom-product">
<div class="col-sm-10">
<table class="table table-hover">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>RM {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>RM 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>RM 10</td>

      </tr>
      <tr>
        <td>Total Amount</td>
        <td>RM {{$total+10}}</td>
      </tr>
    </tbody>
  </table>
<div>
<form action="{{url('orderplace')}}" method="post">
@csrf
  <div class="form-group">
    <textarea name="address" placeholder="enetr your address" class="form-control"></textarea>
  </div>
  <div class="form-group">
<label for="pwd">Payment Method:</label><br>
<input type="radio" value="cash" name="payment"><span> Online Payment</span><br>
<input type="radio" value="cash" name="payment"><span> Payment on Delivery</span>
  </div>
  <button type="submit" class="btn btn-default">Order Now</button>
</form>
</div>
</div>
</div>
@endsection
