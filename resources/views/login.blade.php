@extends('layout.landinglayout')

@section('rightcontent')

<div class="container">
    <h1 style="display: flex; font-family: Montserrat; font-weight:bold;">Login</h1>
    <p style="display: flex;"><i>Silahkan masukkan email dan password untuk melanjutkan</i></p>
<form>
  <div class="mb-3">
    <label for="email" class="form-label" style="display: flex; font-family: Montserrat">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label" style="display:flex; font-family: Montserrat">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="d-flex align-items-center justify-content-between">
  <a href="{{route('register')}}" style="display: flex; margin-bottom: 20px; color: black;">Don't have an account?</a>
  <a href="{{route('forgot')}}" style="display: flex; margin-bottom: 20px; color: black;">Forgot password?</a>
  </div>
  <div class="d-grid gap-2">
  <a href="" class="btn btn-primary" style="display: flex; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; display: block;">Submit</a>
  </div>
</form>

@endsection