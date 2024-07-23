@extends('layout.landinglayout')

@section('rightcontent')

<div class="container">
    <h1 style="display: flex; font-family: Montserrat; font-weight:bold;">Change Password</h1>
    <p style="display: flex;"><i>Masukkan password baru anda</i></p>
<form>
  <div class="mb-3">
    <label for="password" class="form-label" style="display:flex; font-family: Montserrat">Password</label>
    <input type="password" class="form-control" id="newpass" placeholder="Insert new password">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label" style="display:flex; font-family: Montserrat">Password</label>
    <input type="password" class="form-control" id="newpass" placeholder="Confirm password">
  </div>
  <div class="d-grid gap-2">
  <a href="" class="btn btn-primary" style="display: flex; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; display: block;">SUbmit</a>
  </div>
</form>

@endsection