@extends('layout.landinglayout')

@section('rightcontent')

<div class="container">
    <h1 style="display: flex; font-family: Montserrat; font-weight:bold;">Create Account</h1>
<form>
  <div class="mb-3">
    <label for="email" class="form-label" style="display: flex; font-family: Montserrat">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email address">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label" style="display:flex; font-family: Montserrat">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label" style="display:flex; font-family: Montserrat">Confirm Password</label>
    <input type="password" class="form-control" id="password" placeholder="Confirm password">
  </div>
  <div class="mb-3">
    <label for="occupation" class="form-label" style="display:flex; font-family: Montserrat">Occupation</label>
    <input type="text" class="form-control" id="occupation" placeholder="Occupation">
  </div>
  <div class="d-grid gap-2">
  <a href="" class="btn btn-primary" style="display: flex; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; display: block;">Register</a>
  </div>
</form>

@endsection