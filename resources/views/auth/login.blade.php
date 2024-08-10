@extends('layout.landinglayout')

@section('rightcontent')

<div class="container">
    <h1 style="display: flex; font-family: Montserrat; font-weight:bold;">Login</h1>
    <p style="display: flex;"><i>Please enter your email and password to continue.</i></p>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul style="margin-bottom: 0;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label" style="display: flex; font-family: Montserrat">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email" value="{{ old('email') }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label" style="display:flex; font-family: Montserrat">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
        </div>
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('register') }}" style="display: flex; margin-bottom: 20px; color: black;">Don't have an account?</a>
            <a href="{{ route('password.request') }}" style="display: flex; margin-bottom: 20px; color: black;">Forgot password?</a>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" style="display: flex; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; display: block;">Login</button>
        </div>
    </form>

</div>

@endsection
