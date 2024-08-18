@extends('layout.landinglayout')

@section('rightcontent')
<div class="container">
    <h1 style="display: flex; font-family: Montserrat; font-weight:bold;">Reset Password</h1>
    <p style="display: flex; font-style: italic;">Please enter your email address. A password reset link will be sent to your email.</p>
    
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label" style="display: flex; font-family: Montserrat">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email" required>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" style="display: flex; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; display: block;">Submit</button>
        </div>
    </form>
    
    <a href="{{ route('login') }}" style="display: flex; margin-bottom: 20px; margin-top: 15px; color: black;">&lt; Back to Login</a>
</div>

@endsection
