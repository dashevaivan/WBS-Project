@extends('layout.landinglayout')

@section('rightcontent')
<div class="container">
    <h1 style="display: flex; font-family: Montserrat; font-weight:bold;">Reset Password</h1>
    <p style="display: flex; font-style: italic;">Silahkan masukkan email anda. <br>Sebuah email akan dikirimkan untuk mereset password anda.</p>
<form>
  <div class="mb-3">
    <label for="email" class="form-label" style="display: flex; font-family: Montserrat">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan email anda">
  </div>
  <div class="d-grid gap-2">
  <a href="{{route('changepassword')}}" class="btn btn-primary" style="display: flex; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; display: block;">Submit</a>
  </div>
  <a href="{{route('login')}}" style="display: flex; margin-bottom: 20px; margin-top: 15px; color: black;">< Kembali ke Login</a>
</form>



@endsection