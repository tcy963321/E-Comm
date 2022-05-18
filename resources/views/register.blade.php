@extends('master')
@section("content")
<div class="container custom-login">
<div class="row">
<div class="col-sm-4">
<form action="register" method="post">
@csrf
<div class="form-group">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" name="name" placeholder="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" placeholder="abc@gmail.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
</div>
</div>
@endsection
